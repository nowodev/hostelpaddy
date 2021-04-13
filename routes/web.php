<?php
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

// Search route
Route::get('/search', [SearchController::class, 'search'])->name('search');

require __DIR__ . '/custom/dashboard.php';

require __DIR__ . '/custom/main.php';

require __DIR__ . '/custom/auth.php';