<?php

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

Route::view('/', 'home.home');
Route::view('donate', 'home.donate');
Route::view('admin', 'admin.main.dashboard.index')->name('dashboardAdmin');
Route::view('admin/seePlayer', 'admin.main.managePlayer.index')->name('player.index');
Route::view('admin/seePlayer/edit', 'admin.main.managePlayer.edit')->name('player.edit');
Route::view('admin/seeItem', 'admin.main.item.index')->name('item.index');
Route::view('admin/seeItem/create', 'admin.main.item.create')->name('item.create');
Route::view('admin/seeItem/edit', 'admin.main.item.edit')->name('item.edit');


