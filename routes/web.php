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



    Route::group(['prefix' => 'admin',
        'namespace' => 'Admin',
        'middleware'=>'admin'
    ], function()
    {

        Route::get('dashboard/comments', 'AdminController@adminComments');
        Route::get('dashboard/comments_all', 'AdminController@adminCommentsAll');
        Route::get('dashboard/users', 'AdminController@adminUsersGet');
        Route::get('dashboard/ipban', 'BanIpController@getallIPbanned');
        Route::post('dashboard/comments/delete/{id}', 'AdminController@deletecomments');
        Route::post('dashboard/users/{id}/{status}', 'AdminController@renewusers');
        Route::post('dashboard/comments/{id}/{status}', 'AdminController@renewcomments');
        Route::post('dashboard/comments/edit/{id}/{comment}', 'AdminController@editcomments');
        Route::get('dashboard/categories', 'AdminController@getCategories');
        Route::post('dashboard/categories/addcategory', 'AdminController@addCategories');
        Route::post('dashboard/category/{id}/{status}', 'AdminController@renewcategory');
        Route::post('dashboard/admin/dashboard/ipban/addip4ban', 'BanIpController@addIP4ban');
        Route::resource('dashboard', 'AdminController'); //https://laravel.com/docs/5.6/controllers#resource-controllers

    });


    Route::get('/rules', 'PageController@rules');
    Route::get('/help', 'PageController@help');



    Route::get('/livesearch/{str}', 'SearchController@livesearch');

    Route::post('/search', 'SearchController@search');
    Route::get('/profile', 'UsersController@getprofile');


    Route::get('/', 'CategoriesContoller@getCategoriesList');
Route::get('/allschools', 'CategoriesContoller@allschools');
Route::get('/schools/{school_id}', 'CategoriesContoller@getschool');
Route::get('/createtopicschools/{school_id}', 'TopicsController@createTopicSchools');
Route::get('/schools/{school_id}/{topic_id}', 'CategoriesContoller@getTopicbySchool');


Route::post('/{category}/create', 'TopicsController@createtopic');
Route::get('/{category}/{id}', 'CategoriesContoller@getsingletopic');
Route::post('/{category}/{id}/comments', 'TopicsController@storepost');

Route::get('/about', 'CategoriesContoller@about');
Route::get('/about/topic', 'CategoriesContoller@topic');

    Route::get('/register', 'RegistrationController@create');
    Route::post('/register', 'RegistrationController@store');
    Route::get('/login', 'SessionsController@create');
    Route::post('/login', 'Auth\LoginController@login')->name('login');;
    Route::get('/logout', 'SessionsController@destroy');

    Route::get('/avatar', 'UsersController@getAvatar');
    Route::post('/avatar','UsersController@storeAvatar');

    Route::get('/{category}', 'CategoriesContoller@getcategoryindex');

    Route::get('/livesearch/results/{str}', 'SearchController@livesearchResults');



