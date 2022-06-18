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

Route::get('/', 'App\Http\Controllers\HomeController@home');

Route::get('/register','App\Http\Controllers\AuthController@register');

Route::get('/login','App\Http\Controllers\AuthController@login');

Route::post('/simpanuser','App\Http\Controllers\AuthController@simpanuser');

Route::post('/ceklogin','App\Http\Controllers\AuthController@ceklogin');

Route::post('/logout','App\Http\Controllers\AuthController@logout');

