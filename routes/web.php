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


Route::get('/', 'CategoriesContoller@getCategoriesList');
Route::get('/allschools', 'CategoriesContoller@allschools');
Route::get('/schools/{school_id}', 'CategoriesContoller@getschool');
Route::get('/schools/{school_id}/{topic_id}', 'CategoriesContoller@getTopicbySchool');

Route::get('/{category}/{id}', 'CategoriesContoller@getsingletopic');
Route::post('/{category}/{id}/comments', 'TopicsController@storepost');


//Route::get('/category{id}', 'CategoriesContoller@getcategoryindex');


Route::get('/about', 'CategoriesContoller@about');
Route::get('/about/topic', 'CategoriesContoller@topic');


//Route::get('/home', 'HomeController@index')->name('home');
    Auth::routes();
    Route::get('/register', 'RegistrationController@create');
    Route::post('/register', 'RegistrationController@store');
    Route::get('/login', 'SessionsController@create');
//Route::post('/login', 'SessionsController@store');
    Route::post('/login', 'Auth\LoginController@login')->name('login');;
    Route::get('/logout', 'SessionsController@destroy');

    Route::get('/{category}', 'CategoriesContoller@getcategoryindex');
