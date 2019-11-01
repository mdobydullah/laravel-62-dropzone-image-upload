<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('upload', 'ImageUploadController@upload');
Route::post('upload/store', 'ImageUploadController@store');
Route::post('delete', 'ImageUploadController@delete');
