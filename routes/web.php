<?php

Route::get('/','PostController@index');

Route::name('posts_path')->get('/post','PostController@index');




Auth::routes();

Route::group(['middleware'=>'auth'],function(){

   Route::get('/home', 'HomeController@index')->name('home');  

   Route::name('create_path')->get('/post/create','PostController@create');

   Route::name('store_post_path')->post('/posts','PostController@store');

   Route::name('post_path')->get('/post/{post}','PostController@show');

   Route::name('edit_post_path')->get('/post/{post}/edit','PostController@edit');

   Route::name('update_post_path')->put('/posts/{post}','PostController@update');

   Route::name('eliminar_post_path')->delete('/post/{post}/eliminar','PostController@delete');
});



