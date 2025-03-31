<?php

use App\Http\Controllers\MembershipController;
use App\Http\Controllers\MembershipLevelController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//hier komen de routes

//memberships
Route::middleware('auth')->group(function () {
    Route::get('/memberships', [MembershipController::class, 'index'])->name('memberships.index');
    Route::get('/memberships/create', [MembershipController::class, 'create'])->name('memberships.create');
    Route::post('/memberships', [MembershipController::class, 'store'])->name('memberships.store');
    Route::get('/memberships/{membership}', [MembershipController::class, 'show'])->name('memberships.show');
    Route::get('/memberships/{membership}/edit', [MembershipController::class, 'edit'])->name('memberships.edit');
    Route::patch('/memberships/{membership}', [MembershipController::class, 'update'])->name('memberships.update');
    Route::delete('/memberships/{membership}', [MembershipController::class, 'destroy'])->name('memberships.destroy');
});

// Membership Levels
Route::middleware('auth')->group(function () {
    Route::get('/membership-levels', [MembershipLevelController::class, 'index'])->name('membership-levels.index');
    Route::get('/membership-levels/create', [MembershipLevelController::class, 'create'])->name('membership-levels.create');
    Route::post('/membership-levels', [MembershipLevelController::class, 'store'])->name('membership-levels.store');
    Route::get('/membership-levels/{membershipLevel}', [MembershipLevelController::class, 'show'])->name('membership-levels.show');
    Route::get('/membership-levels/{membershipLevel}/edit', [MembershipLevelController::class, 'edit'])->name('membership-levels.edit');
    Route::patch('/membership-levels/{membershipLevel}', [MembershipLevelController::class, 'update'])->name('membership-levels.update');
    Route::delete('/membership-levels/{membershipLevel}', [MembershipLevelController::class, 'destroy'])->name('membership-levels.destroy');
});