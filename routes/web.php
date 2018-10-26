<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', 'AdminController@index');

Route::get('/admin/kategori', 'AdminController@kategori');

Route::get('/admin/vlog', 'AdminController@vlog');

Route::get('/admin/all', 'AdminController@all');

Route::get('/admin/kategori', 'AdminController@kategori');

Route::get('/admin/kategori/in_kategori', 'AdminController@in_kategori');

Route::get('/admin/post', 'AdminController@post');

Route::get('/admin/vlog/in_vlog', 'AdminController@in_vlog');

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/vlog', function () {
    return view('vlog');
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
