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

Route::get('/', 'IndexController@Index')->name("startpage");
Route::get('/liststaff', 'IndexController@ListStaff')->name("stafflist");

Route::get('/show/{id}', 'IndexController@Show')->name("showfirst");
Route::get('/showstaff/{id}',"IndexController@ShowStaff")->name("showsecond");

Route::get('/add', 'IndexController@add');
Route::post('/add','IndexController@store')->name('resumeStore');

