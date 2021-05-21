<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

//Route::get('/', [DashboardController::class, 'index']);

// Route register
Route::get('/register', [RegisterController::class, 'create'])
    ->name('register.create');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');
//

// Route login
Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login.form');

Route::post('/login', [LoginController::class, 'authenticate'])
    ->name('login.authenticate');
//

// Route admin
Route::get('/admin', function() {
    return "Admin";
})->name('admin');
//

// Route player
Route::get('/player', function() {
    return "Player";
})->name('player');
//

// Route::match(['put', 'patch'], '/admin/player/{player}', [PlayerController::class, 'update'])
//     ->name('player.update');

// Route::group(['prefix' => 'admin'], function () {
//     //Route::resource('player', PlayerController::class);
//     Route::get('/player', [PlayerController::class, 'index'])
//         ->name('player.index');
// });
//