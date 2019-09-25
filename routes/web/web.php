<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('{path}', 'HomeController@index')->where('path', '([A-z\d-\/_.]+)?');