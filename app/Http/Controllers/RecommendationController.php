<?php

namespace App\Http\Controllers;

use App\Models\AhpCriterion;
use App\Models\Course;
use App\Models\CourseCriteriaValue;
use App\Models\UserCourseHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class RecommendationController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();

        // Check if user has completed profile
        $hasInterests = $user->interests()->count() > 0;
        $hasAbilities = $user->abilities()->count() > 0;
        $hasCareerGoals = $user->careerGoals()->count() > 0;

       if (!$hasInterests || !$hasAbilities || !$hasCareerGoals) {
    return view('recommendations.incomplete-profile', compact(
        'hasInterests',
        'hasAbilities',
        'hasCareerGoals'
    ));
}


        // Get user's course history
        $courseHistory = UserCourseHistory::where('user_id', $user->id)
            ->whereNotNull('completion_date')
            ->with('course')
            ->get();

        if ($courseHistory->isEmpty()) {
            // If no course history, recommend based on interests and abilities only
            $recommendedCourses = $this->getRecommendationsBasedOnProfile($user);
        } else {
            // If has course history, use content-based filtering
            $contentBasedRecommendations = $this->getContentBasedRecommendations($user, $courseHistory);

            // Also get AHP recommendations
            $ahpRecommendations = $this->getAhpRecommendations($user);

            // Combine both recommendation types
            $recommendedCourses = $this->combineRecommendations($contentBasedRecommendations, $ahpRecommendations);
        }

        return view('recommendations.index', compact('recommendedCourses'));
    }

    /**
     * Get recommendations based on user profile (interests and abilities)
     */
    private function getRecommendationsBasedOnProfile($user)
    {
        // Get user's top interests
        $topInterests = $user->interests()
            ->orderBy('interest_level', 'desc')
            ->take(3)
            ->pluck('category_id');

        // Get user's abilities
        $abilities = $user->abilities()
            ->pluck('level', 'category_id')
            ->toArray();

        // Find courses in user's top interest categories
        $recommendedCourses = Course::whereIn('category_id', $topInterests)
            ->whereNotIn('id', function($query) use ($user) {
                $query->select('course_id')
                    ->from('user_course_history')
                    ->where('user_id', $user->id);
            })
            ->get();

        // Filter courses based on user's ability level
        $filteredCourses = $recommendedCourses->filter(function($course) use ($abilities) {
            // If user has no ability in this category, include beginner courses
            if (!isset($abilities[$course->category_id])) {
                return $course->difficulty_level === 'beginner';
            }

            // Match course difficulty with user ability
            $userLevel = $abilities[$course->category_id];

            if ($userLevel === 'beginner') {
                return $course->difficulty_level === 'beginner';
            } elseif ($userLevel === 'intermediate') {
                return in_array($course->difficulty_level, ['beginner', 'intermediate']);
            } else {
                return true; // Advanced users can take any course
            }
        });

        return $filteredCourses->values();
    }

    /**
     * Get recommendations using Content-Based Filtering
     */
    private function getContentBasedRecommendations($user, $courseHistory)
    {
        // Extract keywords from completed courses
        $userKeywords = [];
        foreach ($courseHistory as $history) {
            if ($history->course->keywords) {
                foreach ($history->course->keywords as $keyword) {
                    if (!isset($userKeywords[$keyword])) {
                        $userKeywords[$keyword] = 0;
                    }
                    $userKeywords[$keyword] += 1;
                }
            }
        }

        // Sort keywords by frequency
        arsort($userKeywords);

        // Get top keywords (user's interests)
        $topKeywords = array_slice($userKeywords, 0, 10, true);

        // Get courses that match these keywords
        $completedCourseIds = $courseHistory->pluck('course_id')->toArray();

        $recommendedCourses = Course::whereNotIn('id', $completedCourseIds)
            ->get()
            ->map(function($course) use ($topKeywords) {
                // Calculate similarity score
                $score = 0;
                if ($course->keywords) {
                    foreach ($course->keywords as $keyword) {
                        if (isset($topKeywords[$keyword])) {
                            $score += $topKeywords[$keyword];
                        }
                    }
                }

                return [
                    'course' => $course,
                    'score' => $score
                ];
            })
            ->filter(function($item) {
                return $item['score'] > 0;
            })
            ->sortByDesc('score')
            ->take(10)
            ->pluck('course');

        return $recommendedCourses;
    }

    /**
     * Get recommendations using AHP (Analytical Hierarchy Process)
     */
    private function getAhpRecommendations($user)
    {
        // Get criteria weights from AHP
        $criteria = AhpCriterion::all();

        // Get user's completed courses
        $completedCourseIds = UserCourseHistory::where('user_id', $user->id)
            ->whereNotNull('completion_date')
            ->pluck('course_id')
            ->toArray();

        // Get all courses not completed by user
        $courses = Course::whereNotIn('id', $completedCourseIds)->get();

        // Calculate AHP scores for each course
        $courseScores = [];

        foreach ($courses as $course) {
            $score = 0;

            // Get course criteria values
            $criteriaValues = CourseCriteriaValue::where('course_id', $course->id)
                ->pluck('value', 'criteria_id')
                ->toArray();

            // Calculate weighted sum
            foreach ($criteria as $criterion) {
                if (isset($criteriaValues[$criterion->id])) {
                    $score += $criterion->weight * $criteriaValues[$criterion->id];
                }
            }

            $courseScores[] = [
                'course' => $course,
                'score' => $score
            ];
        }

        // Sort by score and get top courses
        usort($courseScores, function($a, $b) {
            return $b['score'] <=> $a['score'];
        });

        $recommendedCourses = collect(array_slice($courseScores, 0, 10))
            ->pluck('course');

        return $recommendedCourses;
    }

    /**
     * Combine recommendations from different algorithms
     */
    private function combineRecommendations($contentBasedRecommendations, $ahpRecommendations)
    {
        // Combine both recommendation sets
        $combinedRecommendations = $contentBasedRecommendations->merge($ahpRecommendations);

        // Remove duplicates
        $uniqueRecommendations = $combinedRecommendations->unique('id');

        // Take top 10
        return $uniqueRecommendations->take(10);
    }
}
