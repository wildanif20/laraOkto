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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu/index');
});

Route::get('/profile','HomeController@profile');
Route::get('/gallery','HomeController@gallery');
Route::get('/contact','HomeController@contact');
Route::post('/tampil','HomeController@tampil');
Route::get('/add','ArticlesController@new');
Route::resource('Article', 'ArticlesController');

//
Route::resource('Comment', 'CommentController',['only'=>['store']]);

//
Auth::routes();

//
Route::get('/home', 'HomeController@index')->name('home');

//
Route::get('signup', 'UsersController@signup')->name('signup');
Route::post('signup', 'UsersController@signup_store')->name('signup.store');

//
Route::get('login', 'SessionsController@login')->name('login');
Route::post('login', 'SessionsController@login_store')->name('login.store');

//
Route::get('logout', 'SessionsController@logout')->name('logout.session');

//Remider checl in database
Route::get('forgot-password', 'RemiderController@create')->name('remiders.create');
Route::post('forgot-password', 'RemiderController@store')->name('remiders.store');

//handle change password
Route::get('reset-password/{id}/{token}', 'RemiderController@edit')->name('remiders.edit');
Route::post('reset-password/{id}/{token}', 'RemiderController@update')->name('remiders.update');

//Group middleware
Route::group(['middlerware' => 'sentinel'], function () {
    Route::resource('articles', 'ArticlesController');
});

//Group middleware 
Route::group(['prefix' => 'admin', 'middleware' => ['sentinel', 'hasAdmin']], function () {
    Route::get('/index', 'ArticlesController@new')->name('admin.articles.list');
    Route::get('/admin', 'Admin\DasboardAdminController@index')->name('admin.dashboard');
    // Route::get('/dashboard', 'Admin\DasboardAdminController@index')->name('admin.articles.list');
});

//Test Job
Route::get('/tesJob', 'HomeController@tesJob')->name('tesJob');