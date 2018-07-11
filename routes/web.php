<?php

//User route
Route::group(['namespace' => 'User'], function(){
Route::get('/', 'HomeController@index');
Route::get('read', 'HomeController@read')->name('read');
Route::get('thoughts', 'HomeController@thoughts')->name('thoughts');
Route::get('post/{slug}', 'PostController@post')->name('post');
Route::get('post/category/{slug}', 'HomeController@category')->name('category');
Route::post('getPost', 'PostController@getAllPosts');
});

//Admin Route
Route::group(['namespace' => 'Admin'], function(){
Route::get('admin/home', 'HomeController@index')->name('admin.home');
Route::resource('admin/post', 'PostController');
Route::resource('admin/role','RoleController');
Route::resource('admin/permission','PermissionController');
Route::resource('admin/user', 'UserController');
Route::resource('admin/category', 'CategoryController');
Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
Route::get('admin/profile', 'UserController@profile')->name('admin.profile');
Route::post('admin/profile', 'UserController@updateAdminImage');
Route::post('admin-login', 'Auth\LoginController@login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
