<?php

Route::get('category', 'CategoryController@index')->name('category.index');
Route::get('category/create', 'CategoryController@create')->name('category.create');
Route::post('category/store', 'CategoryController@store')->name('category.store');
Route::get('category/getdetails', 'CategoryController@getdetails')->name('category.getdetails');
Route::get('category/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::post('category/update', 'CategoryController@update')->name('category.update');
Route::get('category/delete/{id}', 'CategoryController@destroy')->name('category.destroy');




