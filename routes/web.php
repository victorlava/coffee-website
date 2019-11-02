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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'Admin\AdminController@index')->name('admin');

Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home.index');
Route::get('/admin/home/create', 'Admin\HomeController@create')->name('admin.home.create');
Route::post('/admin/home', 'Admin\HomeController@store')->name('admin.home.store');

Route::get('/admin/about', 'Admin\AboutController@index')->name('admin.about.index');
Route::get('/admin/about/create', 'Admin\AboutController@create')->name('admin.about.create');
Route::post('/admin/about', 'Admin\AboutController@store')->name('admin.about.store');
