<?php

use App\Http\Controllers\HostelsListingController;
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

Route::middleware(['auth:agent'])->group(function () {
    Route::get('/agent', function () {
        return view('agents.index');
    })->name('agent.index');
    Route::resource('listings', HostelsListingController::class);
});
