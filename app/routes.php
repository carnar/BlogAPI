<?php

Route::get('/', function () {
    return View::make('hello');
});

Route::group(['prefix' => 'v1'], function () {
    Route::resource('posts', 'PostsController');
});

