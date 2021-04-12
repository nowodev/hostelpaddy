<?php

use App\Http\Controllers\AgentAuth\AuthenticatedSessionController;
use App\Http\Controllers\AgentAuth\ConfirmablePasswordController;
use App\Http\Controllers\AgentAuth\EmailVerificationNotificationController;
use App\Http\Controllers\AgentAuth\EmailVerificationPromptController;
use App\Http\Controllers\AgentAuth\NewPasswordController;
use App\Http\Controllers\AgentAuth\PasswordResetLinkController;
use App\Http\Controllers\AgentAuth\RegisteredUserController;
use App\Http\Controllers\AgentAuth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::get('/agent/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('agent.register');

Route::post('/agent/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

Route::get('/agent/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('agent.login');

Route::post('/agent/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::get('/agent/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('agent.password.request');

Route::post('/agent/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('agent.password.email');

Route::get('/agent/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('agent.password.reset');

Route::post('/agent/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('agent.password.update');

Route::get('/agent/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('agent.verification.notice');

Route::get('/agent/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('agent.verification.verify');

Route::post('/agent/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('agent.verification.send');

Route::get('/agent/confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->middleware('auth')
    ->name('agent.password.confirm');

Route::post('/agent/confirm-password', [ConfirmablePasswordController::class, 'store'])
    ->middleware('auth');

Route::post('/agent/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('agent')
    ->name('agent.logout');
