<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWebsiteRequest;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\User;

class WebsiteController extends Controller
{
    public function index() {
        /** @var User|null $user */
        $user = Auth::user();
        abort_unless($user, 401);

        $websites = $user->websites()->latest()->get();

        return Inertia::render('Dashboard', [
            'websites' => $websites
        ]);
    }

    public function store(StoreWebsiteRequest $request) {
        $request->user()->websites()->create($request->validated());
        return to_route('dashboard')->with('success', 'Website added successfully.');
    }
}
