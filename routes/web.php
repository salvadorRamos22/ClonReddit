<?php

Route::name('posts_path')->get('/post','PostController@index');

Route::name('create_path')->get('/post/create','PostController@create');

Route::name('post_path')->get('/post/{post}','PostController@show');