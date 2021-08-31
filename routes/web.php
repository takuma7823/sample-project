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
 Route::get('/authorize', 'App\Http\Controllers\AuthorizeController@index');
 Route::get('/callback', 'App\Http\Controllers\CallbackController@index');

