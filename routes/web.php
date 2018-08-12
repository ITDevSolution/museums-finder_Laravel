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

//Route::get('/museums', 'MuseumsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UsersController@index');

Route::get('/users/{user}', 'UsersController@show');
Route::get('/users2/{user}', 'UsersController@show2');

//Creando la nueva ruta con methodo Resource para que nos genere varios tipos de methodos get/post/put/etc
Route::resource('/museums', 'MuseumsController');
