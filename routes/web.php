<?php


Route::get('/', 'HomeController@index')->name('home-page');
Route::get('/listing', 'ListingController@index')->name('listing');
Route::get('/car/{id}', 'CarController@index')->name('car.detail-old');
Route::get('/auto/{slug}', 'CarController@showCar')->name('car.detail');
Route::get('/listing/brand/{mark}', 'ListingController@brand')->name('listing.brand');
Route::get('/listing/brand/{mark}/{model}', 'ListingController@model')->name('listing.model');
Route::get('/listing/city/{city}', 'ListingController@city')->name('listing.city');
Route::get('/test', 'HomeController@test')->name('test');
Route::get('/test2', 'HomeController@test2')->name('test2');
Route::get('/test3', 'HomeController@test3')->name('test3');
