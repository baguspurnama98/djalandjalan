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

Route::get('/', 'DataController@landing');
Route::get('/partner', 'DataController@partner');
Route::get('/login', function(){
    return view('login');
});
Route::post('/login', 'AuthController@login');
Route::get('/register', function(){
    return view('register');
});
Route::post('/register', 'AuthController@register');
