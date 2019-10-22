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

Route::get('/', function () {
    return view('welcome');
});
Route::any('user/{corr?}', 'RutasController@user');
Route::any('home/', 'RutasController@home');
Route::any('login/{msj?}', 'RutasController@login');
Route::any('register/', 'RutasController@register');

Route::any('registerHome/', 'RutasController@registerHome');
Route::any('loginUser/', 'RutasController@loginUsu');



