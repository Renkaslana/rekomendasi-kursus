<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\UserCourseHistory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        $courses = Course::with('category')->paginate(10);

        return view('courses.index', compact('courses'));
    }

    public function show(Course $course): View
    {
        $user = Auth::user();
        $courseHistory = UserCourseHistory::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->first();

        return view('courses.show', compact('course', 'courseHistory'));
    }

    public function enroll(Course $course): RedirectResponse
    {
        $user = Auth::user();

        // Check if already enrolled
        $exists = UserCourseHistory::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->exists();

        if (!$exists) {
            UserCourseHistory::create([
                'user_id' => $user->id,
                'course_id' => $course->id,
            ]);
        }

        return redirect()->route('courses.show', $course)->with('success', 'Berhasil mendaftar kursus.');
    }

    public function complete(Course $course): RedirectResponse
    {
        $user = Auth::user();

        $courseHistory = UserCourseHistory::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->first();

        if ($courseHistory) {
            $courseHistory->update([
                'completion_date' => now(),
            ]);
        }

        return redirect()->route('courses.show', $course)->with('success', 'Kursus ditandai sebagai selesai.');
    }

    public function rate(Course $course, Request $request): RedirectResponse
    {
        $user = Auth::user();

        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string',
        ]);

        $courseHistory = UserCourseHistory::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->first();

        if ($courseHistory) {
            $courseHistory->update([
                'rating' => $validated['rating'],
                'review' => $validated['review'],
            ]);
        }

        return redirect()->route('courses.show', $course)->with('success', 'Ulasan berhasil disimpan.');
    }
}
