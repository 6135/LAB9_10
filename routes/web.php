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
/*
|--------------------------------------------------------------------------
| Blog Controller
|--------------------------------------------------------------------------
*/
Route::get('/','Blog@index');
Route::get('/blog','Blog@index');

/*
|--------------------------------------------------------------------------
| Register Controller
|--------------------------------------------------------------------------
*/ 
Route::get('/register','Register@index');
Route::post('/register','Register@register_action');
