<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\WebsiteController::class, 'index'])->name('dashboard');
    Route::post('/websites', [\App\Http\Controllers\WebsiteController::class, 'store'])->name('websites.store');
});

require __DIR__.'/settings.php';
