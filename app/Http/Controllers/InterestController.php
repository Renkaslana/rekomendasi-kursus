<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\UserInterest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class InterestController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();
        $categories = Category::all();
        $userInterests = $user->interests()->pluck('interest_level', 'category_id')->toArray();

        return view('profile.interests', compact('categories', 'userInterests'));
    }

    public function store(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $validated = $request->validate([
            'interests' => 'required|array',
            'interests.*' => 'required|integer|min:1|max:10',
        ]);

        // Delete existing interests
        $user->interests()->delete();

        // Store new interests
        foreach ($validated['interests'] as $categoryId => $interestLevel) {
            UserInterest::create([
                'user_id' => $user->id,
                'category_id' => $categoryId,
                'interest_level' => $interestLevel,
            ]);
        }

        return redirect()->route('profile.interests')->with('success', 'Minat berhasil disimpan.');
    }
}
