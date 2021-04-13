<?php

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
Route::get('/agent', function () {
    return view('agents.index');
})->middleware(['agent'])->name('agent.index');