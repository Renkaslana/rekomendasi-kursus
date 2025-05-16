<?php

namespace App\Http\Controllers;

use App\Models\UserCareerGoal;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class CareerGoalController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();
        $careerGoals = $user->careerGoals;

        return view('profile.career-goals', compact('careerGoals'));
    }

    public function store(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'priority' => 'required|integer|min:1|max:10',
        ]);

        $validated['user_id'] = $user->id;

        UserCareerGoal::create($validated);

        return redirect()->route('profile.career-goals')->with('success', 'Tujuan karir berhasil ditambahkan.');
    }

    public function destroy(UserCareerGoal $careerGoal): RedirectResponse
    {
        $this->authorize('delete', $careerGoal);

        $careerGoal->delete();

        return redirect()->route('profile.career-goals')->with('success', 'Tujuan karir berhasil dihapus.');
    }
}
