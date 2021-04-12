<?php

use App\Http\Controllers\StudentAuth\AuthenticatedSessionController;
use App\Http\Controllers\StudentAuth\ConfirmablePasswordController;
use App\Http\Controllers\StudentAuth\EmailVerificationNotificationController;
use App\Http\Controllers\StudentAuth\EmailVerificationPromptController;
use App\Http\Controllers\StudentAuth\NewPasswordController;
use App\Http\Controllers\StudentAuth\PasswordResetLinkController;
use App\Http\Controllers\StudentAuth\RegisteredUserController;
use App\Http\Controllers\StudentAuth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::get('/student/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('student.register');

Route::post('/student/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

Route::get('/student/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('student.login');

Route::post('/student/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::get('/student/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('student.password.request');

Route::post('/student/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('student.password.email');

Route::get('/student/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('student.password.reset');

Route::post('/student/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('student.password.update');

Route::get('/student/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('student.verification.notice');

Route::get('/student/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('student.verification.verify');

Route::post('/student/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('student.verification.send');

Route::get('/student/confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->middleware('auth')
    ->name('student.password.confirm');

Route::post('/student/confirm-password', [ConfirmablePasswordController::class, 'store'])
    ->middleware('auth');

Route::post('/student/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('student')
    ->name('student.logout');
