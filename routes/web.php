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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::view('/', 'index')->name('home');

Route::resource('delivery', 'DeliveryController')->except(['show', 'destroy', 'edit', 'update']);
Route::resource('rent-car', 'RentCarController')->except(['destroy', 'edit', 'update']);

Route::get('/admin', 'DashboardController@index')->name('admin.index');


Route::prefix('admin')->namespace('Dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', 'DashboardController@index')->name('home');
    Route::resource('delivery','DeliveryController');
    Route::resource('car','CarController');
//    Route::resource('banana', 'BananaController');
});


