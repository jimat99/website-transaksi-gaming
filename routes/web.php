<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route home
Route::get('/', [HomeController::class, 'index'])
    ->name('home');
//

// Route donate
Route::get('/donate', [HomeController::class, 'donate'])
    ->name('donate');
//

// Route register
Route::get('/register', [RegisterController::class, 'create'])
    ->name('register.create');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');
//

// Route login dan logout
// Route::get('/login', [LoginController::class, 'showLoginForm'])
//     ->name('login.form');

Route::post('/login', [LoginController::class, 'authenticate'])
    ->name('login.authenticate');

Route::get('/logout', [LoginController::class, 'logout'])
    ->name('login.logout');
//

// Route admin
Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin.index');
//

// Route player
Route::get('/player', [PlayerController::class, 'index'])
    ->name('player.index');
//