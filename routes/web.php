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

Route::get('/', 'HomeController@index');

Route::get('/articles', 'ArticlesController@index');

Route::get('/contact', 'ContactController@index');
Route::post('contact', 'ContactController@store');

Route::get('/articles/{post_name}', 'ArticlesController@show');

Route::resource('/admin/articles', 'CRUDArticlesController')->middleware('is_admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

