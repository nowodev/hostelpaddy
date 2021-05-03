<?php

use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\Agent\HostelController;
use Illuminate\Support\Facades\Route;


// Admin Route
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

// Students Route
Route::middleware(['auth:student'])->prefix('student')->group(function () {
    Route::get('/', function () {
        return view('students.index');
    })->name('student.index');
});

// Agents Route
Route::middleware(['auth:agent'])->prefix('agent')->group(function () {
    Route::get('/', [AgentController::class, 'index'])
        ->name('agent.index');
    Route::get('/edit-profile', [AgentController::class, 'edit'])
        ->name('agent.edit');
    Route::put('/edit-profile/{agent}', [AgentController::class, 'update'])
        ->name('agent.update');

    Route::resource('hostels', HostelController::class);
});