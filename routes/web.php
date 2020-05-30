<?php

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

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/','DashboardController@index')->name('admin.index');
    Route::resource('banana', 'BananaController');
});


Route::resource('delivery', 'DeliveryController')->except(['show', 'destroy', 'edit', 'update']);
Route::resource('rent-car', 'RentCarController')->except(['destroy', 'edit', 'update']);
