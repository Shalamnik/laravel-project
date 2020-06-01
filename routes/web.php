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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orders', 'OrderController@index')->name('orders.index');
Route::get('/orders/create', 'OrderController@create')->name('orders.create');
Route::get('/orders/{id}', 'OrderController@show')->name('orders.show');
Route::post('/orders', 'OrderController@store')->name('orders.store');
Route::delete('orders/{id}', 'OrderController@destroy')->name('orders.destroy');

Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
