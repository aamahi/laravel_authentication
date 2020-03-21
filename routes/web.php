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

Route::get('/',"home@home")->name('home');

Route::get('/reg',"authentication@register")->name('reg');
Route::post('/reg',"authentication@signup");
Route::get('/lgin',"authentication@login")->name('lgin');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
