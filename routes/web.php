<?php

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
Auth::routes();
Route::resource('info', 'infoController');
Route::resource('markes', 'MarkesController');
Route::resource('courses','CoursesController');
Route::resource('skills','SkillsController');
Route::resource('education','EducationController');

Route::get('/posts/{id}/deletecomment','CommentController@destroy');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/myprofile', 'PagesUserController@myprofile');
Route::get('/profile/{id}', 'PagesUserController@profile');
Route::get('events', 'EventController@index')->name('events.index');
Route::get('/live', 'PagesUserController@live');


Route::POST('/posts/{post}/comment','CommentController@store');
Route::POST('/posts/{post}/like', 'LikeController@like');
Route::POST('/posts/search','CommentController@search');
Route::post('events', 'EventController@addEvent')->name('events.add');