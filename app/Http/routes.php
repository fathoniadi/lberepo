<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','Auth@index');
Route::post('/login','Auth@doLogin');
Route::get('/login', 'Auth@login');
Route::get('/register', 'Auth@register');
Route::get('/logout', 'Auth@logout');
Route::post('/getbidang','Auth@getBidang');
Route::post('/register', 'Auth@doRegister');
Route::get('/dashboard', 'Dashboard@index');
