<?php

use Illuminate\Support\Facades\Route;


// Route::view('/about', 'coming-soon')->name('about');
// Route::view('/hostels', 'coming-soon')->name('hostels');
// Route::view('/help', 'coming-soon')->name('help');
// Route::view('/onboarding', 'coming-soon')->name('onboarding');
// Route::view('/contact', 'coming-soon')->name('contact');
// Route::view('/faqs', 'coming-soon')->name('faqs');
// Route::view('/tos', 'coming-soon')->name('tos');
// Route::view('/privacy', 'coming-soon')->name('privacy');

Route::get('/about', function () {
    return view('webpages.about');
})->name('about');

Route::get('/hostels', function () {
    return view('webpages.hostels');
})->name('hostels');

Route::get('/help', function () {
    return view('webpages.help');
})->name('help');

Route::get('/onboarding', function () {
    return view('webpages.onboarding');
})->name('onboarding');

Route::get('/contact', function () {
    return view('webpages.contact');
})->name('contact');

Route::get('/faqs', function () {
    return view('webpages.faqs');
})->name('faqs');

Route::get('/tos', function () {
    return view('webpages.tos');
})->name('tos');

Route::get('/privacy', function () {
    return view('webpages.privacy');
})->name('privacy');