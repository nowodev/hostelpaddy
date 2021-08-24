<?php

use App\Http\Controllers\Home\ListedHostelsController;
use App\Http\Controllers\Home\SearchController;
use App\Http\Controllers\Home\SortController;
use Illuminate\Support\Facades\Route;

// Dynamic  Page Routes
Route::get('/hostels', [ListedHostelsController::class, 'index'])
    ->name('hostels');

Route::get('/hostels/{availableHostel:slug}', [ListedHostelsController::class, 'show'])
    ->name('info');

// Search, Sort, Filter Routes
Route::get('/search', [SearchController::class, 'index'])
    ->name('search');

Route::get('search(sortByPriceLowestToHighest)', [SortController::class, 'sortByPriceLowToHigh'])
    ->name('low.to.high');

Route::get('search(sortByPriceHighestToLowest)', [SortController::class, 'sortByPriceHighToLow'])
    ->name('high.to.low');

Route::get('search(sortByRecentlyUpdated)', [SortController::class, 'sortByRecentlyUpdated'])
    ->name('recently.updated');

Route::get('search(sortByRecentlyAdded)', [SortController::class, 'sortByRecentlyAdded'])
    ->name('recently.added');

// Static Page Routes
Route::view('/about', 'frontend.about')->name('about');
Route::view('/house', 'frontend.house')->name('house');
Route::view('/help', 'frontend.help')->name('help');
Route::view('/onboarding', 'frontend.onboarding')->name('onboarding');
Route::view('/contact', 'frontend.contact')->name('contact');
Route::view('/faqs', 'frontend.faqs')->name('faqs');
Route::view('/tos', 'frontend.tos')->name('tos');
Route::view('/privacy', 'frontend.privacy')->name('privacy');