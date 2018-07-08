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

    Route::group(['prefix' => 'admin',
        'namespace' => 'Admin',
        'middleware'=>'admin'
    ], function()
    {

//        Route::get('dashboard/news', 'AdminController@adminNews');
        Route::get('dashboard/comments', 'AdminController@adminComments');
        Route::get('dashboard/comments_all', 'AdminController@adminCommentsAll');

        Route::get('dashboard/users', 'AdminController@adminUsersGet');
        Route::get('dashboard/ipban', 'BanIpController@getallIPbanned');

        Route::post('dashboard/comments/delete/{id}', 'AdminController@deletecomments');

//        Route::get('dashboard/colors', 'AdminController@adminColorsGet');
//        Route::post('dashboard/colors', 'AdminController@adminColorsSet');
//
        Route::post('dashboard/users/{id}/{status}', 'AdminController@renewusers');
        Route::post('dashboard/comments/{id}/{status}', 'AdminController@renewcomments');
        Route::post('dashboard/comments/edit/{id}/{comment}', 'AdminController@editcomments');
        Route::post('dashboard/admin/dashboard/ipban/addip4ban', 'BanIpController@addIP4ban');

        Route::resource('dashboard', 'AdminController');

    });


    Route::get('/rules', 'PageController@rules');
    Route::get('/help', 'PageController@help');

//    Route::get('password/email', 'PasswordController@getEmail');
//    Route::post('password/email', 'PasswordController@postEmail');
//    Route::get('password/reset/{token}', 'PasswordController@getReset');
//    Route::post('password/reset', 'Auth\ResetPasswordController@postReset');

    Route::get('/livesearch/{str}', 'SearchController@livesearch');

    Route::get('/search', 'SearchController@search');
    Route::get('/profile', 'UsersController@getprofile');


    Route::get('/', 'CategoriesContoller@getCategoriesList');
Route::get('/allschools', 'CategoriesContoller@allschools');
Route::get('/schools/{school_id}', 'CategoriesContoller@getschool');
Route::get('/createtopicschools/{school_id}', 'TopicsController@createTopicSchools');
Route::get('/schools/{school_id}/{topic_id}', 'CategoriesContoller@getTopicbySchool');


Route::post('/{category}/create', 'TopicsController@createtopic');
Route::get('/{category}/{id}', 'CategoriesContoller@getsingletopic');
Route::post('/{category}/{id}/comments', 'TopicsController@storepost');


//Route::get('/category{id}', 'CategoriesContoller@getcategoryindex');


Route::get('/about', 'CategoriesContoller@about');
Route::get('/about/topic', 'CategoriesContoller@topic');


//Route::get('/home', 'HomeController@index')->name('home');
   // Auth::routes();
    Route::get('/register', 'RegistrationController@create');
    Route::post('/register', 'RegistrationController@store');
    Route::get('/login', 'SessionsController@create');
//Route::post('/login', 'SessionsController@store');
    Route::post('/login', 'Auth\LoginController@login')->name('login');;
    Route::get('/logout', 'SessionsController@destroy');

    Route::get('/avatar', 'UsersController@getAvatar');
    Route::post('/avatar','UsersController@storeAvatar');

    Route::get('/{category}', 'CategoriesContoller@getcategoryindex');
   // Route::get('/search', 'SearchController@search');

    Route::get('/livesearch/results/{str}', 'SearchController@livesearchResults');



