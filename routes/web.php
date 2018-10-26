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


Route::get('/', 'WelcomeController@show');


Route::get('/admin/addbook', 'BooksController@show');
Route::post('/admin/addbook', [
    'uses' => 'BooksController@added'
  ]);


Route::match(['get','post'],'/admin/updatebook', 'BooksController@update');

Route::match(['get','post'],'/admin/deletebook', 'BooksController@delete');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/admin/addauthor', 'AuthorsController@show');

Route::post('/admin/addauthor', [
    'uses' => 'AuthorsController@added'
  ]);
Route::match(['get','post'],'/admin/updateauthor', 'AuthorsController@update');
Route::get('/admin/updateauthor/{id}', 'AuthorsController@showupdateform');
Route::post('/admin/updateauthor/{id}', 'AuthorsController@update');
Route::get('/admin/deleteauthor', 'AuthorsController@deleteform');
Route::get('/admin/deleteauthor/{id}', 'AuthorsController@delete');
Route::match(['get','post'],'/admin/searchbook', 'BooksController@search');
Route::match(['get','post'],'/admin/searchauthor', 'AuthorsController@search');


