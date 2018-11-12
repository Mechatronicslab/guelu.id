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
      $post_list = Post::orderBy('id', 'DESC')->get();
      $kategori_list = Categories::all();
      $slideshow = Post::where('type', '4')->get();
      $berita = Post::where('type', '1')->get();
      $forum = Post::where('type', '2')->get();
      $vlog = Post::where('type', '3')->get();
      $administrator_list = Administrator::all();
      return view('index', compact('post_list', 'slideshow', 'berita', 'forum', 'vlog', 'kategori_list', 'administrator_list'));
  }

  public function berita(){
      $post_list = Post::orderBy('id', 'DESC')->get();
      $kategori_list = Categories::all();
      $berita = Post::where('type', '1')->get();
      $forum = Post::where('type', '2')->get();
      $vlog = Post::where('type', '3')->get();
      $slideshow = Post::where('type', '4')->get();
      $administrator_list = Administrator::all();
      return view('berita', compact('post_list', 'slideshow', 'berita', 'forum', 'vlog', 'kategori_list', 'administrator_list'));
  }

  public function vlog(){
      $post_list = Post::orderBy('id', 'DESC')->get();
      $kategori_list = Categories::all();
      $berita = Post::where('type', '1')->get();
      $forum = Post::where('type', '2')->get();
      $vlog = Post::where('type', '3')->get();
      $slideshow = Post::where('type', '4')->get();
      $administrator_list = Administrator::all();
      return view('vlog', compact('post_list', 'slideshow', 'berita', 'forum', 'vlog', 'kategori_list', 'administrator_list'));
  }

  public function forum(){
      $post_list = Post::orderBy('id', 'DESC')->get();
      $kategori_list = Categories::all();
      $berita = Post::where('type', '1')->get();
      $forum = Post::where('type', '2')->get();
      $vlog = Post::where('type', '3')->get();
      $slideshow = Post::where('type', '4')->get();
      $administrator_list = Administrator::all();
      return view('forum', compact('post_list', 'slideshow', 'berita', 'forum', 'vlog', 'kategori_list', 'administrator_list'));
  }

  public function about(){
      $post_list = Post::orderBy('id', 'DESC')->get();
      $kategori_list = Categories::all();
      $berita = Post::where('type', '1')->get();
      $forum = Post::where('type', '2')->get();
      $vlog = Post::where('type', '3')->get();
      $slideshow = Post::where('type', '4')->get();
      $administrator_list = Administrator::all();
      return view('about', compact('post_list', 'slideshow', 'berita', 'forum', 'vlog', 'kategori_list', 'administrator_list'));
  }

  public function contact(){
      $post_list = Post::orderBy('id', 'DESC')->get();
      $kategori_list = Categories::all();
      $berita = Post::where('type', '1')->get();
      $forum = Post::where('type', '2')->get();
      $vlog = Post::where('type', '3')->get();
      $slideshow = Post::where('type', '4')->get();
      $administrator_list = Administrator::all();
      return view('contact', compact('post_list', 'slideshow', 'berita', 'forum', 'vlog', 'kategori_list', 'administrator_list'));
  }

  public function post(){
      $post_list = Post::orderBy('id', 'DESC')->get();
      $kategori_list = Categories::all();
      $berita = Post::where('type', '1')->get();
      $forum = Post::where('type', '2')->get();
      $vlog = Post::where('type', '3')->get();
      $slideshow = Post::where('type', '4')->get();
      $administrator_list = Administrator::all();
      return view('post', compact('post_list', 'slideshow', 'berita', 'forum', 'vlog', 'kategori_list', 'administrator_list'));
  }

  public function show(Post $post){
      $post_list = Post::orderBy('id', 'DESC')->get();
      $kategori_list = Categories::all();
      $berita = Post::where('type', '1')->get();
      $forum = Post::where('type', '2')->get();
      $vlog = Post::where('type', '3')->get();
      $slideshow = Post::where('type', '4')->get();
      $administrator_list = Administrator::all();
      return view('post', compact('post', 'post_list', 'berita', 'forum', 'vlog', 'slideshow', 'kategori_list', 'administrator_list'));
  }

  public function vlogshow(Post $post){
      $post_list = Post::orderBy('id', 'DESC')->get();
      $kategori_list = Categories::all();
      $berita = Post::where('type', '1')->get();
      $forum = Post::where('type', '2')->get();
      $vlog = Post::where('type', '3')->get();
      $slideshow = Post::where('type', '4')->get();
      $administrator_list = Administrator::all();
      return view('vlogs', compact('post', 'post_list', 'berita', 'forum', 'vlog', 'slideshow', 'kategori_list', 'administrator_list'));
  }
}
