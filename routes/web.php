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

Route::get('/', 'HomeController@index');

Route::get('/test', function() {
    return view('/test');
});

Route::post('/user_dl',  'HomeController@store')->name('upload');
Route::post('/favorite_dl',  'HomeController@favorite_dl')->name('favorite_dl');
Auth::routes();

