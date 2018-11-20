<?php
// start home view
Route::get('/', 'HomeController@index')->name('index');
Route::get('/berita', 'HomeController@berita')->name('berita');
Route::get('/vlog', 'HomeController@vlog')->name('vlog');
Route::get('/forum', 'HomeController@forum')->name('forum');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/post', 'HomeController@post')->name('post');
Route::get('/all', 'HomeController@all')->name('all');
Route::get('/stories', 'HomeController@stories')->name('stories');
Route::get('/stories/{stories}', 'HomeController@storiesdelete')->name('stories.deletestories');
Route::get('/forums/{stories}', 'HomeController@storiesshow')->name('stories.show');
Route::post('/stories', 'HomeController@storiesinsert')->name('stories.insertinsert');
Route::get('/post/{post}', 'HomeController@show')->name('post.show');
Route::post('/post/{post}', 'PostCommentController@comment')->name('post.comment');
Route::get('/vlogs/{post}', 'HomeController@vlogshow')->name('vlog.show');
Route::get('/caleg/{post}', 'HomeController@calegshow')->name('caleg.show');
Route::post('/vlogs/{post}', 'VlogCommentController@comment')->name('vlog.comment');
Route::post('/caleg/{post}', 'VlogCommentController@calegcomment')->name('caleg.comment');
Route::post('/forums/{stories}', 'StoriesCommentController@comment')->name('stories.comment');
Route::post('/contact/{post}', 'MessageController@message')->name('contact.message');
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
Route::get('/admin/edit/{post}', 'PostController@EditPost')->name('admin.EditPost');
Route::patch('/admin/edit/{post}', 'PostController@UpdatePost')->name('admin.UpdatePost');
Route::delete('/admin/all/{post}/delete', 'PostController@DeletePost')->name('admin.DeletePost');
// end post
// start vlog
Route::get('/admin/vlog', 'VlogController@vlog')->name('admin.vlog');
Route::post('/admin/vlog', 'VlogController@InsertVlog')->name('admin.InsertVlog');
Route::get('/admin/vlogs/{post}', 'VlogController@EditVlogs')->name('admin.EditVlogs');
Route::patch('/admin/vlogs/{post}', 'VlogController@UpdateVlogs')->name('admin.UpdateVlogs');
// end vlog
// start kategori
Route::get('/admin/kategori', 'KategoriController@kategori')->name('admin.kategori');
Route::get('/admin/kategori/in_kategori', 'KategoriController@in_kategori')->name('admin.kategori.in_kategori');
Route::post('/admin/kategori', 'KategoriController@InsertKategori')->name('admin.InsertKategori');
// end kategori
//start forums
Route::delete('/admin/{stories}/delete', 'PostController@DeleteForum')->name('admin.DeleteForum');
Route::patch('/admin/{stories}', 'PostController@UpdateForum')->name('admin.UpdateForum');
//end forums
// end admin
