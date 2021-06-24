<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\Agent\HostelController;
use App\Http\Controllers\Student\FavoriteHostelController;
use App\Http\Controllers\Student\ShareHostelController;
use App\Http\Controllers\Student\StudentController;
use Illuminate\Support\Facades\Route;


// Admin Route
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/hostels', [AdminController::class, 'index'])
        ->name('dashboard');
});

// Students Route
Route::middleware(['auth:student'])->prefix('student')->group(function () {
    Route::name('student.')->group(function () {
        Route::get('/', [StudentController::class, 'index'])
            ->name('index');

        Route::get('/settings', [StudentController::class, 'settings'])
            ->name('settings');

        Route::get('/hostel-mate', [StudentController::class, 'hostel_mate'])
            ->name('hostel-mate');

        Route::get('/chat', [StudentController::class, 'chat'])
        ->name('chat');

        Route::get('/notifications', [StudentController::class, 'notification'])
            ->name('notification');

        Route::get('/', [StudentController::class, 'index'])
            ->name('index');

        Route::put('/fave-hostel/{id}', [FavoriteHostelController::class, 'store'])
            ->name('fave');
    });

    Route::resource('hostels', ShareHostelController::class);
});

// Agents Route
Route::middleware(['auth:agent'])->prefix('agent')->group(function () {
    Route::name('agent.')->group(function () {

        Route::get('/', [AgentController::class, 'index'])
            ->name('index');

        Route::get('/edit-profile', [AgentController::class, 'edit'])
            ->name('edit');
        Route::put('/edit-profile/{agent}', [AgentController::class, 'update'])
            ->name('update');

        Route::get('/archive', [AgentController::class, 'archive'])
            ->name('archive');

        Route::put('/archive/restore/{id}', [AgentController::class, 'restore'])
            ->name('hostel.restore');

        Route::delete('/archive/delete/{id}', [AgentController::class, 'delete'])
            ->name('hostel.delete');
    });

    Route::resource('hostels', HostelController::class);
});