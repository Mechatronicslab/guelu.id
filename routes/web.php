<?php
// start home view
Route::get('/', 'HomeController@index')->name('index');
Route::get('/berita', 'HomeController@berita')->name('berita');
Route::get('/vlog', 'HomeController@vlog')->name('vlog');
Route::get('/forum', 'HomeController@forum')->name('forum');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/post', 'HomeController@post')->name('post');
Route::get('/register', 'UserController@register')->name('register');
Route::post('/doRegister', 'UserController@doRegister')->name('doRegister');
Route::get('/login', 'UserController@login')->name('login');
Route::post('/doLogin', 'UserController@doLogin')->name('doLogin');
Route::get('/doLogout', 'UserController@doLogout')->name('doLogout');
// end home view

// ==============================================================

// start admin
Route::get('/admin', 'UserController@index')->name('admin');

// start post
Route::get('/admin/all', 'PostController@all')->name('admin.all');
Route::get('/admin/post', 'PostController@post')->name('admin.post');
Route::post('/admin/post', 'PostController@InsertPost')->name('admin.InsertPost');
Route::post('/post/{post}', 'PostController@ShowPost')->name('admin.ShowPost');
// end post
// start vlog
Route::get('/admin/vlog', 'VlogController@vlog')->name('admin.vlog');
Route::post('/admin/vlog', 'VlogController@InsertVlog')->name('admin.InsertVlog');
// end vlog
// start kategori
Route::get('/admin/kategori', 'KategoriController@kategori')->name('admin.kategori');
Route::get('/admin/kategori/in_kategori', 'KategoriController@in_kategori')->name('admin.kategori.in_kategori');
Route::post('/admin/kategori', 'KategoriController@InsertKategori')->name('admin.InsertKategori');
// end kategori
// end admin
