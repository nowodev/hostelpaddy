<?php

use App\Http\Controllers\HostelsListingController;
use App\Models\Agent;
use App\Models\Hostel;
use App\Models\Utility;
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
    Route::get('/', function () {
        return view('agents.index');
    })->name('agent.index');

    Route::resource('listings', HostelsListingController::class);
});