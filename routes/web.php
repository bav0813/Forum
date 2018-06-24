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
Route::get('/', 'CategoriesContoller@index');
Route::get('/subsection', 'CategoriesContoller@subsection');
Route::get('/about', 'CategoriesContoller@about');
Route::get('/about/topic', 'CategoriesContoller@topic');


//Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/register', 'RegistrationController@create');
    Route::post('/register', 'RegistrationController@store');
    Route::get('/login', 'SessionsController@create');
//Route::post('/login', 'SessionsController@store');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/logout', 'SessionsController@destroy');
