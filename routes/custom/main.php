<?php

use App\Http\Controllers\Homepage\ListedHostelsController;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/hostels', [ListedHostelsController::class, 'index'])
    ->name('hostels');

Route::get('/hostels/{availableHostel:slug}', [ListedHostelsController::class, 'show'])
    ->name('info');

Route::get('/house', function () {
    return view('frontend.house');
})->name('house');

Route::get('/help', function () {
    return view('frontend.help');
})->name('help');

Route::get('/onboarding', function () {
    return view('frontend.onboarding');
})->name('onboarding');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/faqs', function () {
    return view('frontend.faqs');
})->name('faqs');

Route::get('/tos', function () {
    return view('frontend.tos');
})->name('tos');

Route::get('/privacy', function () {
    return view('frontend.privacy');
})->name('privacy');
