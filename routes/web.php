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

//Route::get('/', function () {
//    return view('main');
//});

Auth::routes();
Route::get('/', 'Comments@index');
Route::get('/subsection', 'Comments@subsection');
Route::get('/about', 'Comments@about');
Route::get('/about/topic', 'Comments@topic');


//Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/register', 'RegistrationController@create');
    Route::post('/register', 'RegistrationController@store');
    Route::get('/login', 'SessionsController@create');
//Route::post('/login', 'SessionsController@store');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/logout', 'SessionsController@destroy');
