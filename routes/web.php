<?php


Route::get('/', 'HomeController@index')->name('home-page');
Route::get('/test', 'HomeController@test')->name('test');
Route::get('/test2', 'HomeController@test2')->name('test2');
Route::get('/test3', 'HomeController@test3')->name('test3');
