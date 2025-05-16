<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\UserAbility;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AbilityController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();
        $categories = Category::all();
        $userAbilities = $user->abilities()->pluck('level', 'category_id')->toArray();

        return view('profile.abilities', compact('categories', 'userAbilities'));
    }

    public function store(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $validated = $request->validate([
            'abilities' => 'required|array',
            'abilities.*' => 'required|in:beginner,intermediate,advanced',
        ]);

        // Delete existing abilities
        $user->abilities()->delete();

        // Store new abilities
        foreach ($validated['abilities'] as $categoryId => $level) {
            UserAbility::create([
                'user_id' => $user->id,
                'category_id' => $categoryId,
                'level' => $level,
            ]);
        }

        return redirect()->route('profile.abilities')->with('success', 'Kemampuan berhasil disimpan.');
    }
}
