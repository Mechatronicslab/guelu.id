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
Route::get('/admin/all', 'PostController@all')->name('admin.all');
Route::get('/admin/post', 'PostController@post')->name('admin.post');
// end post
// start vlog
Route::get('/admin/vlog', 'VlogController@vlog')->name('admin.vlog');
Route::get('/admin/vlog/in_vlog', 'VlogController@in_vlog')->name('admin.in_vlog');
// end vlog
// start kategori
Route::get('/admin/kategori', 'KategoriController@kategori')->name('admin.kategori');
Route::get('/admin/kategori/in_kategori', 'KategoriController@in_kategori')->name('admin.kategori.in_kategori');
Route::post('/admin/kategori', 'KategoriController@InsertKategori')->name('admin.InsertKategori');
// end kategori
// end admin
