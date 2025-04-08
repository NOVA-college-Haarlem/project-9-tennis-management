<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\MembershipLevelController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\CompetitionMatchController;
use App\Http\Controllers\CompetitionTeamController;
use App\Http\Controllers\CourtController;

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\EquipmentRentalController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\MaintenanceScheduleController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TermsOfServiceController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TournamentMatchController;
use App\Http\Controllers\TournamentRegistrationController;
use App\Http\Controllers\YouthProgramController;
use App\Http\Controllers\YouthRegistrationController;
use App\Http\Requests\CompetitionTeamRequest;
use Database\Seeders\CompetitionMatchSeeder;
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

// Memberships
Route::name('memberships.')->prefix('memberships')->group(function () {
    Route::get('/', [MembershipController::class, 'index'])->name('index');
    Route::get('/create', [MembershipController::class, 'create'])->name('create');
    Route::post('/', [MembershipController::class, 'store'])->name('store');
    Route::get('/{membership}', [MembershipController::class, 'show'])->name('show');
    Route::get('/{membership}/edit', [MembershipController::class, 'edit'])->name('edit');
    Route::patch('/{membership}', [MembershipController::class, 'update'])->name('update');
    Route::delete('/{membership}', [MembershipController::class, 'destroy'])->name('destroy');
});

// Membership Levels
Route::name('membership-levels.')->prefix('membership-levels')->group(function () {
    Route::get('/', [MembershipLevelController::class, 'index'])->name('index');
    Route::get('/create', [MembershipLevelController::class, 'create'])->name('create');
    Route::post('/', [MembershipLevelController::class, 'store'])->name('store');
    Route::get('/{membershipLevel}', [MembershipLevelController::class, 'show'])->name('show');
    Route::get('/{membershipLevel}/edit', [MembershipLevelController::class, 'edit'])->name('edit');
    Route::patch('/{membershipLevel}', [MembershipLevelController::class, 'update'])->name('update');
    Route::delete('/{membershipLevel}', [MembershipLevelController::class, 'destroy'])->name('destroy');
});

// Bookings
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

// Courts
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

// Maintenance Schedules
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

// Tournament Routes
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

// Tournament Matches
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

// Tournament Registrations
Route::name("tournament_registrations.")->group(function () {
    Route::prefix("tournament_registrations")->group(function () {
        Route::get('/', [TournamentRegistrationController::class, 'index'])->name('index');
        Route::get('/create', [TournamentRegistrationController::class, 'create'])->name('create');
        Route::post('/', [TournamentRegistrationController::class, 'store'])->name('store');
        Route::get('/{registration}', [TournamentRegistrationController::class, 'show'])->name('show');
        Route::get('/{registration}/edit', [TournamentRegistrationController::class, 'edit'])->name('edit');
        Route::put('/{registration}', [TournamentRegistrationController::class, 'update'])->name('update');
        Route::delete('/{registration}', [TournamentRegistrationController::class, 'destroy'])->name('destroy');
    });
});


//Competition Routes
Route::name("competitions.")->group(function () {
    Route::prefix("competitions")->group(function () {
        Route::get('/', [CompetitionController::class, 'index'])->name('index');
        Route::get('/create', [CompetitionController::class, 'create'])->name('create');
        Route::post('/', [CompetitionController::class, 'store'])->name('store');
        Route::get('/{competition}', [CompetitionController::class, 'show'])->name('show');
        Route::get('/{competition}/edit', [CompetitionController::class, 'edit'])->name('edit');
        Route::put('/{competition}', [CompetitionController::class, 'update'])->name('update');
        Route::delete('/{competition}', [CompetitionController::class, 'destroy'])->name('destroy');
    });
});

Route::name("competition_matches.")->group(function () {
    Route::prefix("competition_matches")->group(function () {
        Route::get('/', [CompetitionMatchController::class, 'index'])->name('index');
        Route::get('/create', [CompetitionMatchController::class, 'create'])->name('create');
        Route::post('/', [CompetitionMatchController::class, 'store'])->name('store');
        Route::get('/{competition_match}', [CompetitionMatchController::class, 'show'])->name('show');
        Route::get('/{competition_match}/edit', [CompetitionMatchController::class, 'edit'])->name('edit');
        Route::put('/{competition_match}', [CompetitionMatchController::class, 'update'])->name('update');
        Route::delete('/{competition_match}', [CompetitionMatchController::class, 'destroy'])->name('destroy');
    });
});


Route::name("competition_teams.")->group(function () {
    Route::prefix("competition_teams")->group(function () {
        Route::get('/', [CompetitionTeamController::class, 'index'])->name('index');
        Route::get('/create', [CompetitionTeamController::class, 'create'])->name('create');
        Route::post('/', [CompetitionTeamController::class, 'store'])->name('store');
        Route::get('/{competition_team}', [CompetitionTeamController::class, 'show'])->name('show');
        Route::get('/{competition_team}/edit', [CompetitionTeamController::class, 'edit'])->name('edit');
        Route::put('/{competition_team}', [CompetitionTeamController::class, 'update'])->name('update');
        Route::delete('/{competition_team}', [CompetitionTeamController::class, 'destroy'])->name('destroy');
    });
});

//Equipment Routes
Route::name("equipments.")->group(function () {
    Route::prefix("equipments")->group(function () {
        Route::get('/', [EquipmentController::class, 'index'])->name('index');
        Route::get('/create', [EquipmentController::class, 'create'])->name('create');
        Route::post('/', [EquipmentController::class, 'store'])->name('store');
        Route::get('/{equipment}', [EquipmentController::class, 'show'])->name('show');
        Route::get('/{equipment}/edit', [EquipmentController::class, 'edit'])->name('edit');
        Route::put('/{equipment}', [EquipmentController::class, 'update'])->name('update');
        Route::delete('/{equipment}', [EquipmentController::class, 'destroy'])->name('destroy');
    });
});

//Equipment Rental Routes
Route::name("equipment_rentals.")->group(function () {
    Route::prefix("equipment_rentals")->group(function () {
        Route::get('/', [EquipmentRentalController::class, 'index'])->name('index');
        Route::get('/create', [EquipmentRentalController::class, 'create'])->name('create');
        Route::post('/', [EquipmentRentalController::class, 'store'])->name('store');
        Route::get('/{equipment_rental}', [EquipmentRentalController::class, 'show'])->name('show');
        Route::get('/{equipment_rental}/edit', [EquipmentRentalController::class, 'edit'])->name('edit');
        Route::put('/{equipment_rental}', [EquipmentRentalController::class, 'update'])->name('update');
        Route::delete('/{equipment_rental}', [EquipmentRentalController::class, 'destroy'])->name('destroy');
    });
});

// Youth Programs
Route::name("youth_programs.")->group(function () {
    Route::prefix("youth_programs")->group(function () {
        Route::get('/', [YouthProgramController::class, 'index'])->name('index');
        Route::get('/create', [YouthProgramController::class, 'create'])->name('create');
        Route::post('/', [YouthProgramController::class, 'store'])->name('store');
        Route::get('/{youth_program}', [YouthProgramController::class, 'show'])->name('show');
        Route::get('/{youth_program}/edit', [YouthProgramController::class, 'edit'])->name('edit');
        Route::put('/{youth_program}', [YouthProgramController::class, 'update'])->name('update');
        Route::delete('/{youth_program}', [YouthProgramController::class, 'destroy'])->name('destroy');
    });
});

// Youth Registrations
Route::name("youth_registrations.")->group(function () {
    Route::prefix("youth_registrations")->group(function () {
        Route::get('/', [YouthRegistrationController::class, 'index'])->name('index');
        Route::get('/create', [YouthRegistrationController::class, 'create'])->name('create');
        Route::post('/', [YouthRegistrationController::class, 'store'])->name('store');
        Route::get('/{youth_registration}', [YouthRegistrationController::class, 'show'])->name('show');
        Route::get('/{youth_registration}/edit', [YouthRegistrationController::class, 'edit'])->name('edit');
        Route::put('/{youth_registration}', [YouthRegistrationController::class, 'update'])->name('update');
        Route::delete('/{youth_registration}', [YouthRegistrationController::class, 'destroy'])->name('destroy');
    });
});


require __DIR__.'/auth.php';
