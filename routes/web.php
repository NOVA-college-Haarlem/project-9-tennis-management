<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\MaintenanceScheduleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TournamentMatchController;
use App\Http\Controllers\TournamentRegistrationController;
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

Route::name("bookings.")->group(function () {
    Route::prefix("bookings")->group(function () {
        Route::get('/', [BookingController::class, 'index'])->name('index');
        Route::get('/create', [BookingController::class, 'create'])->name('create');
        Route::post('/', [BookingController::class, 'store'])->name('store');
        Route::get('/{booking}', [BookingController::class, 'show'])->name('show');
        Route::get('/{booking}/edit', [BookingController::class, 'edit'])->name('edit');
        Route::put('/{booking}', [BookingController::class, 'update'])->name('update');
        Route::delete('/{booking}', [BookingController::class, 'destroy'])->name('destroy');
    });
});

Route::name("courts.")->group(function () {
    Route::prefix("courts")->group(function () {
        Route::get('/', [CourtController::class, 'index'])->name('index');
        Route::get('/create', [CourtController::class, 'create'])->name('create');
        Route::post('/', [CourtController::class, 'store'])->name('store');
        Route::get('/{court}', [CourtController::class, 'show'])->name('show');
        Route::get('/{court}/edit', [CourtController::class, 'edit'])->name('edit');
        Route::put('/{court}', [CourtController::class, 'update'])->name('update');
        Route::delete('/{court}', [CourtController::class, 'destroy'])->name('destroy');
    });
});


Route::name("maintenanceschedules.")->group(function () {
    Route::prefix("maintenanceschedules")->group(function () {
        Route::get('/', [MaintenancescheduleController::class, 'index'])->name('index');
        Route::get('/create', [MaintenancescheduleController::class, 'create'])->name('create');
        Route::post('/', [MaintenancescheduleController::class, 'store'])->name('store');
        Route::get('/{maintenanceSchedule}', [MaintenancescheduleController::class, 'show'])->name('show');  
        Route::get('/{maintenanceSchedule}/edit', [MaintenancescheduleController::class, 'edit'])->name('edit');  
        Route::put('/{maintenanceSchedule}', [MaintenancescheduleController::class, 'update'])->name('update');  
        Route::delete('/{maintenanceSchedule}', [MaintenancescheduleController::class, 'destroy'])->name('destroy');  
    });
});

Route::name("tournaments.")->group(function () {
    Route::prefix("tournaments")->group(function () {
        Route::get('/', [TournamentController::class, 'index'])->name('index');
        Route::get('/create', [TournamentController::class, 'create'])->name('create');
        Route::post('/', [TournamentController::class, 'store'])->name('store');
        Route::get('/{tournament}', [TournamentController::class, 'show'])->name('show');
        Route::get('/{tournament}/edit', [TournamentController::class, 'edit'])->name('edit');
        Route::put('/{tournament}', [TournamentController::class, 'update'])->name('update');
        Route::delete('/{tournament}', [TournamentController::class, 'destroy'])->name('destroy');
    });
});

Route::name("tournament_matches.")->group(function () {
    Route::prefix("tournament_matches")->group(function () {
        Route::get('/', [TournamentMatchController::class, 'index'])->name('index');
        Route::get('/create', [TournamentMatchController::class, 'create'])->name('create');
        Route::post('/', [TournamentMatchController::class, 'store'])->name('store');
        Route::get('/{tournament_match}', [TournamentMatchController::class, 'show'])->name('show');
        Route::get('/{tournament_match}/edit', [TournamentMatchController::class, 'edit'])->name('edit');
        Route::put('/{tournament_match}', [TournamentMatchController::class, 'update'])->name('update');
        Route::delete('/{tournament_match}', [TournamentMatchController::class, 'destroy'])->name('destroy');
    });
});

Route::name("tournament_registrations.")->group(function () {
    Route::prefix("tournament_registrations")->group(function () {
        Route::get('/', [TournamentRegistrationController::class, 'index'])->name('index');
        Route::get('/create', [TournamentRegistrationController::class, 'create'])->name('create');
        Route::post('/', [TournamentRegistrationController::class, 'store'])->name('store');
        Route::get('/{tournament_registration}', [TournamentRegistrationController::class, 'show'])->name('show');
        Route::get('/{tournament_registration}/edit', [TournamentRegistrationController::class, 'edit'])->name('edit');
        Route::put('/{tournament_registration}', [TournamentRegistrationController::class, 'update'])->name('update');
        Route::delete('/{tournament_registration}', [TournamentRegistrationController::class, 'destroy'])->name('destroy');
    });
});


require __DIR__.'/auth.php';
