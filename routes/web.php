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
    return view('index');
});






Route::get('/index','HomeController@index');

Route::get('/about','HomeController@about');

Route::get('/services','HomeController@services');

Route::get('/contact','HomeController@contact');

Route::get('/pos','HomeController@pos');

