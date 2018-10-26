<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', 'AdminController@index');

Route::get('/admin/news', 'AdminController@news');

Route::get('/admin/vlog', 'AdminController@vlog');

Route::get('/admin/forum', 'AdminController@forum');

Route::get('/admin/kategori', 'AdminController@kategori');

Route::get('/admin/news/in_news', 'AdminController@in_news');

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
