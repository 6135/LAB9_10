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
Route::get('/', function () {
 return view('welcome');
}); 
Route::get('/blog','Blog@index');
/*
Route::get('/blog/{any?}/{any2?}/{any3?}',function($any = null, $any2 = null, $any3 = null){
	return redirect('/'.$any.'/');
});*/
/*
|--------------------------------------------------------------------------
| Register Controller
|--------------------------------------------------------------------------
*/ 
Route::get('/blog/register','Register@index');
Route::post('/blog/register','Register@register_action');
/*
|--------------------------------------------------------------------------
| Login Controller
|--------------------------------------------------------------------------
*/
Route::get('/blog/login','Login@index');
Route::post('/blog/login','Login@login_action');
Route::get('/blog/logout','Login@logout');
/*
|--------------------------------------------------------------------------
| Post Controller
|--------------------------------------------------------------------------
*/
Route::get('/blog/post/{id?}','Post@post');
//Route::get('/blog/post/{id}','Post@post');

Route::post('/blog/post_action/{id?}','Post@post_action');
//Route::post('/blog/post_action/{id}','Post@post_action');
//Route::any('{all}','Blog@index');
