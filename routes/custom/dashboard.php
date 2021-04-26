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

Route::middleware(['auth:agent'])->group(function () {
    Route::get('/agent', function () {
        return view('agents.index');
    })->name('agent.index');

    Route::resource('listings', HostelsListingController::class);
});

Route::get('/test', function () {
    // return Hostel::with(['amenities', 'utilities', 'rules'])
    //         ->orderBy('id')->get();

    return Hostel::with(['amenities', 'utilities', 'rules'])
        ->where('id', 50)->first();
});

Route::get('/img', function()
{
    $imagePath = public_path('storage/10000680.jpg');
    $img = Image::make($imagePath)->resize(300, 200);
    return $img->response('jpg');
});