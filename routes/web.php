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

Route::get('/orders', 'OrderController@index');
Route::get('/orders/create', 'OrderController@create');
Route::get('/orders/{id}', 'OrderController@show');
Route::post('/orders', 'OrderController@store');
Route::delete('orders/{id}', 'OrderController@destroy');
