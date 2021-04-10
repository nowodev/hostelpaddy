<?php
use App\Http\Controllers\MailingList;
use App\Http\Controllers\SearchController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/coming-soon', function () {
    return view('webpages.coming-soon');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/main.php';

require __DIR__.'/auth.php';

require __DIR__.'/studentauth.php';

require __DIR__.'/agentauth.php';

// Search route
Route::get('/search', [SearchController::class, 'search'])->name('search');

// This route is used to collect emails
Route::get('/mail', [MailingList::class, 'form']);
Route::post('/mail', [MailingList::class, 'submit']);

// Students Route
Route::get('/student', function () {
    return view('students.index');
})->middleware(['student'])->name('student.index');

// Agents Route
Route::get('/agent', function () {
    return view('agents.index');
})->middleware(['agent'])->name('agent.index');
