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

Route::get('/orders', function () {
    $users = [
        ['name' => 'sergey', 'age' => 23],
        ['name' => 'vlad', 'age' => 22],
        ['name' => 'misha', 'age' => 22]
    ];
    return view('orders', ['users' => $users]);
});
