<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\UserCourseHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();
        $completedCourses = UserCourseHistory::where('user_id', $user->id)
            ->whereNotNull('completion_date')
            ->with('course')
            ->get();

        $inProgressCourses = UserCourseHistory::where('user_id', $user->id)
            ->whereNull('completion_date')
            ->with('course')
            ->get();

        $recommendedCourses = [];

        // Check if user has completed profile
        $hasInterests = $user->interests()->count() > 0;
        $hasAbilities = $user->abilities()->count() > 0;
        $hasCareerGoals = $user->careerGoals()->count() > 0;
        $profileComplete = $hasInterests && $hasAbilities && $hasCareerGoals;

        return view('dashboard', compact(
    'completedCourses',
    'inProgressCourses',
    'recommendedCourses',
    'profileComplete',
    'hasInterests',
    'hasAbilities',
    'hasCareerGoals'
));


    }
}
