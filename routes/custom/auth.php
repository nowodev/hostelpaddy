<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\StudentRegisterController;
use App\Http\Controllers\Auth\AgentRegisterController;
use Illuminate\Support\Facades\Route;

// STUDENT REGISTERATION CONTROLLER
Route::get('/register/student', [StudentRegisterController::class, 'create'])
    ->middleware('guest')
    ->name('student.register');

Route::post('/register/student', [StudentRegisterController::class, 'store'])
    ->middleware('guest');

// AGENT REGISTERATION CONTROLLER
Route::get('/register/agent', [AgentRegisterController::class, 'create'])
    ->middleware('guest')
    ->name('agent.register');

Route::post('/register/agent', [AgentRegisterController::class, 'store'])
    ->middleware('guest');

// GENERAL LOGIN CONTROLLER
Route::get('/login', [AuthController::class, 'create'])
    ->middleware('guest')
    ->name('onboard.login');

Route::post('/login', [AuthController::class, 'store'])
    ->middleware('guest');

// ADMIN LOGOUT CONTROLLER
Route::post('/logout', [AuthController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// AGENT LOGOUT CONTROLLER
Route::post('/agent/logout', [AuthController::class, 'destroy'])
    ->middleware('agent')
    ->name('agent.logout');

// STUDENT LOGOUT CONTROLLER
Route::post('/student/logout', [AuthController::class, 'destroy'])
    ->middleware('student')
    ->name('student.logout');
