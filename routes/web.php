<?php

Route::get('/post','PostController@index');

Route::get('/post/{id}','PostController@show');