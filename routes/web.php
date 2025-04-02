<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\MembershipLevelController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaintenanceScheduleController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TermsOfServiceController;
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



//hier komen de routes

//statische pagina's
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('/terms', [TermsOfServiceController::class, 'index'])->name('terms');
Route::get('/about', [AboutUsController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

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
