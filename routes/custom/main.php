<?php

use App\Http\Controllers\Home\ListedHostelsController;
use App\Http\Controllers\Home\PreferenceController;
use Illuminate\Support\Facades\Route;

// Dynamic  Page Routes
Route::get('/hostels', [ListedHostelsController::class, 'index'])
    ->name('hostels');

Route::post('/hostels', [PreferenceController::class])
    ->name('filter.preference');

Route::get('/hostels/{availableHostel:slug}', [ListedHostelsController::class, 'show'])
    ->name('info');

// Static Page Routes
Route::view('/about', 'frontend.about')->name('about');
Route::view('/house', 'frontend.house')->name('house');
Route::view('/help', 'frontend.help')->name('help');
Route::view('/onboarding', 'frontend.onboarding')->name('onboarding');
Route::view('/contact', 'frontend.contact')->name('contact');
Route::view('/faqs', 'frontend.faqs')->name('faqs');
Route::view('/tos', 'frontend.tos')->name('tos');
Route::view('/privacy', 'frontend.privacy')->name('privacy');