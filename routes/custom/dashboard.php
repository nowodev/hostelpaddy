<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\Agent\HostelController;
use App\Http\Controllers\Agent\ProfileController as AgentProfileController;
	use App\Http\Controllers\Student\FavoriteController;
	use App\Http\Controllers\Student\PreferenceController;
// use App\Http\Controllers\Agent\HostelController;
use App\Http\Controllers\Student\SharedHostelController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Student\ProfileController as StudentProfileController;
use Illuminate\Support\Facades\Route;


// Admin Route
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])
        ->name('dashboard');
});

// Students Route
Route::middleware(['auth:student'])->prefix('student')->group(function () {
    Route::name('student.')->group(function () {
        Route::get('/', [StudentController::class, 'index'])
            ->name('index');
        Route::get('/hostels/{availableHostel:slug}', [StudentController::class, 'show'])
            ->name('info');
        Route::get('/account', [StudentController::class, 'settings_account'])
            ->name('settings.account');
        Route::post('/account/preference', [PreferenceController::class, 'store'])
            ->name('notifications.preference');
        Route::get('/profile', [StudentController::class, 'settings_profile'])
            ->name('settings.profile');
        Route::get('/hostel-mate', [StudentController::class, 'hostel_mate'])
            ->name('hostel-mate');
        Route::get('/saved-hostel', [StudentController::class, 'saved_hostel'])
            ->name('saved-hostels');
        Route::get('/chat', [StudentController::class, 'chat'])
            ->name('chat');
        Route::get('/notifications', [StudentController::class, 'notification'])
            ->name('notification');
        Route::put('/add-to-favorite/{id}', [FavoriteController::class, 'toggleFavorite'])
            ->name('fave');
        Route::delete('/remove-from-favorite/{id}', [FavoriteController::class, 'removeFavorite'])
            ->name('unfave');
		    Route::put('hostel-mate/add-to-favorite/{id}', [FavoriteController::class, 'toggleSharedFavorite'])
			    ->name('sharedFave');
		    Route::delete('hostel-mate/remove-from-favorite/{id}', [FavoriteController::class, 'removeSharedFavorite'])
			    ->name('sharedUnfave');
        Route::put('/edit-profile/{student}', [StudentProfileController::class, 'update'])
            ->name('update');

        Route::resource('hostel-mate', SharedHostelController::class);
    });
});

// Old Agents Route
// Route::middleware(['auth:agent'])->prefix('agent')->group(function () {
//     Route::name('agent.')->group(function () {

//         Route::get('/', [AgentController::class, 'index'])
//             ->name('index');

//         Route::get('/edit-profile', [AgentController::class, 'edit'])
//             ->name('edit');
//         Route::put('/edit-profile/{agent}', [AgentController::class, 'update'])
//             ->name('update');

//         Route::get('/archive', [AgentController::class, 'archive'])
//             ->name('archive');

//         Route::put('/archive/restore/{id}', [AgentController::class, 'restore'])
//             ->name('hostel.restore');

//         Route::delete('/archive/delete/{id}', [AgentController::class, 'delete'])
//             ->name('hostel.delete');
//     });

//     Route::resource('hostels', HostelController::class);
// });

Route::middleware(['auth:agent'])->prefix('agent')->group(function () {
    Route::name('agent.')->group(function () {

        Route::get('/', [AgentController::class, 'index'])
            ->name('index');
        Route::get('/hostels/{availableHostel:slug}', [AgentController::class, 'show'])
            ->name('info');
        Route::get('/account', [AgentController::class, 'settings_account'])
            ->name('settings.account');
        Route::get('/profile', [AgentController::class, 'settings_profile'])
            ->name('settings.profile');
        Route::get('/chat', [AgentController::class, 'chat'])
            ->name('chat');
        Route::get('/notifications', [AgentController::class, 'notification'])
            ->name('notification');
        Route::put('/edit-profile/{agent}', [AgentProfileController::class, 'update'])
            ->name('update');

        Route::resource('listings', HostelController::class);
    });
});