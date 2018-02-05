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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/config', 'HomeController@config')->name('config');

Route::get('/estado/leerestados','AjaxController@estado')->name('estado');

Route::get('/sexo/leersexos','AjaxController@sexo')->name('sexo');

Route::get('/ocupacion/leerocupaciones','AjaxController@ocupacion')->name('ocupacion');