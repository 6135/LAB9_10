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

/*
|--------------------------------------------------------------------------
| Register Controller
|--------------------------------------------------------------------------
*/ 
Route::get('/register','Register@index');
Route::post('/register','Register@register_action');
/*
|--------------------------------------------------------------------------
| Login Controller
|--------------------------------------------------------------------------
*/
Route::get('/login','Login@index');
Route::post('/login','Login@login_action');
Route::get('/logout','Login@logout');
/*
|--------------------------------------------------------------------------
| Post Controller
|--------------------------------------------------------------------------
*/
Route::get('/post','Post@post');
Route::get('/post/{id}','Post@post');

Route::post('/post_action','Post@post_action');
Route::post('/post_action/{id}','Post@post_action');
Route::any('{all}','Blog@index');
