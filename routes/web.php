<?php
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Artisan;
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
    return view('webpages.coming_soon');
});

// Artisan routes
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/optimize', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    exec('rm -f'.storage_path('logs/*log'));
    exec('rm -f'.base_path('log'));

    return "Cache is cleared";
})->name('clear.cache');

// Search route
Route::get('/search', [SearchController::class, 'index'])
    ->name('search');

require __DIR__ . '/custom/dashboard.php';

require __DIR__ . '/custom/main.php';

require __DIR__ . '/custom/auth.php';