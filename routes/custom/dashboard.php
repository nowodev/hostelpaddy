<?php

use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\Agent\HostelController;
use Illuminate\Support\Facades\Route;


// Admin Route
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

// Students Route
Route::get('/student', function () {
    return view('students.index');
})->middleware(['student'])->name('student.index');

// Agents Route
Route::middleware(['auth:agent'])->prefix('agent')->group(function () {
    Route::get('/', [AgentController::class, 'index'])->name('agent.index');

    Route::resource('hostels', HostelController::class);
});