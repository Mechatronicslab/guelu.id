<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){
      return view('index');
  }
  public function berita(){
      return view('berita');
  }
  public function vlog(){
      return view('vlog');
  }
  public function forum(){
      return view('forum');
  }
  public function about(){
      return view('about');
  }
  public function contact(){
      return view('contact');
  }
  public function post(){
      return view('post');
  }
  public function register(){
      return view('register');
  }
  public function login(){
      return view('login');
  }
}
