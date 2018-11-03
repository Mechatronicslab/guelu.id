<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use App\model\Categories;
use App\model\Post;
use App\model\Administrator;

class HomeController extends Controller
{
  public function index(){
      $post_list = Post::all();
      $kategori_list = Categories::all();
      return view('index', compact('post_list'), compact('kategori_list'));
  }
  public function berita(){
      $post_list = Post::all();
      $kategori_list = Categories::all();
      return view('berita', compact('post_list'), compact('kategori_list'));
  }
  public function vlog(){
      $post_list = Post::all();
      $kategori_list = Categories::all();
      return view('vlog', compact('post_list'), compact('kategori_list'));
  }
  public function forum(){
      $post_list = Post::all();
      $kategori_list = Categories::all();
      return view('forum', compact('post_list'), compact('kategori_list'));
  }
  public function about(){
      $post_list = Post::all();
      $kategori_list = Categories::all();
      return view('about', compact('post_list'), compact('kategori_list'));
  }
  public function contact(){
      $post_list = Post::all();
      $kategori_list = Categories::all();
      return view('contact', compact('post_list'), compact('kategori_list'));
  }
  public function post(){
      $post_list = Post::all();
      $kategori_list = Categories::all();
      return view('post', compact('post_list'), compact('kategori_list'));
  }
  public function register(){
      $post_list = Post::all();
      $kategori_list = Categories::all();
      return view('register', compact('post_list'), compact('kategori_list'));
  }
  public function login(){
      $post_list = Post::all();
      $kategori_list = Categories::all();
      return view('login', compact('post_list'), compact('kategori_list'));
  }
}
