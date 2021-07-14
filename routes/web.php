<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ItemController;

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

// Route register untuk player
Route::get('/register', [PlayerController::class, 'create'])
    ->name('home.register.create');

Route::post('/register', [PlayerController::class, 'store'])
    ->name('home.register.store');
//

// Route login dan logout
Route::post('/login', [LoginController::class, 'authenticate'])
    ->name('login.authenticate');

Route::get('/logout', [LoginController::class, 'logout'])
    ->name('login.logout');
//

// Route donate
Route::get('/donate', [HomeController::class, 'donate'])
    ->name('donate');
//

// Route dashboard admin
Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin.dashboard.index');
//

// Route item untuk admin
Route::get('/admin/item', [ItemController::class, 'index'])
    ->name('admin.item.index');

Route::get('/admin/item/create', [ItemController::class, 'create'])
    ->name('admin.item.create');

Route::post('/admin/item', [ItemController::class, 'store'])
    ->name('admin.item.store');

Route::get('/admin/item/{id}/edit', [ItemController::class, 'edit'])
    ->name('admin.item.edit');

Route::put('/admin/item/{id}', [ItemController::class, 'update'])
    ->name('admin.item.update');

Route::delete('/admin/item/{id}', [ItemController::class, 'destroy'])
    ->name('admin.item.destroy');
//

// Route player untuk admin
Route::get('/admin/player', [PlayerController::class, 'index'])
    ->name('admin.player.index');

Route::get('/admin/player/{id}/edit', [PlayerController::class, 'edit'])
    ->name('admin.player.edit');

Route::put('/admin/player/{id}', [PlayerController::class, 'update'])
    ->name('admin.player.update');
//

// Route buy item untuk player
Route::get('/buy-items', [PlayerController::class, 'formBuyItem'])
    ->name('home.buy-item.form-buy-item');

Route::post('/buy-items', [PlayerController::class, 'buyItem'])
    ->name('home.buy-item.buy-item');
//
