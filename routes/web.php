<?php
// start home view
Route::get('/', 'HomeController@index')->name('index');
Route::get('/berita', 'HomeController@berita')->name('berita');
Route::get('/vlog', 'HomeController@vlog')->name('vlog');
Route::get('/forum', 'HomeController@forum')->name('forum');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/post', 'HomeController@post')->name('post');
Route::get('/register', 'HomeController@register')->name('register');
Route::get('/login', 'HomeController@login')->name('login');
// end home view

// ==============================================================

// start admin
Route::get('/admin', 'AdminController@index')->name('admin');

// start post
Route::get('/admin/kategori', 'PostController@kategori')->name('admin.kategori');
Route::get('/admin/kategori/in_kategori', 'PostController@in_kategori')->name('admin.kategori.in_kategori');
Route::get('/admin/all', 'PostController@all')->name('admin.all');
Route::get('/admin/post', 'PostController@post')->name('admin.post');
Route::get('/admin/vlog', 'PostController@vlog')->name('admin.vlog');
Route::get('/admin/vlog/in_vlog', 'PostController@in_vlog')->name('admin.in_vlog');
// end post
// end admin
