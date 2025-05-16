<?php

use App\Http\Controllers\AbilityController;
use App\Http\Controllers\CareerGoalController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecommendationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Interests
    Route::get('/profile/interests', [InterestController::class, 'index'])->name('profile.interests');
    Route::post('/profile/interests', [InterestController::class, 'store'])->name('profile.interests.store');

    // Abilities
    Route::get('/profile/abilities', [AbilityController::class, 'index'])->name('profile.abilities');
    Route::post('/profile/abilities', [AbilityController::class, 'store'])->name('profile.abilities.store');

    // Career Goals
    Route::get('/profile/career-goals', [CareerGoalController::class, 'index'])->name('profile.career-goals');
    Route::post('/profile/career-goals', [CareerGoalController::class, 'store'])->name('profile.career-goals.store');
    Route::delete('/profile/career-goals/{careerGoal}', [CareerGoalController::class, 'destroy'])->name('profile.career-goals.destroy');

    // Courses
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
    Route::post('/courses/{course}/enroll', [CourseController::class, 'enroll'])->name('courses.enroll');
    Route::post('/courses/{course}/complete', [CourseController::class, 'complete'])->name('courses.complete');
    Route::post('/courses/{course}/rate', [CourseController::class, 'rate'])->name('courses.rate');

    // Recommendations
    Route::get('/recommendations', [RecommendationController::class, 'index'])->name('recommendations.index');
});

require __DIR__.'/auth.php';
