<?php

Route::get('/', function () {
    return View::make('hello');
});

Route::group(['prefix' => '1.0'], function () {
    Route::resource('posts', 'PostsController');
});

