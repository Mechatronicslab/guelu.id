<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use App\model\Categories;
use App\model\Post;
use App\model\User;
use App\model\Administrator;
use Session;

class HomeController extends Controller
{

    public function index()
    {
        $kategoris = Categories::all();
        $slideshow = Post::where('type', '4')->get();
        $berita = Post::where('type', '1')->get();
        $forum = Post::where('type', '2')->get();
        $vlog = Post::where('type', '3')->get();
        $side_one = Post::latest()->where('type', '1')->get();
        $side_two = Post::latest()->where('type', '3')->get();
        return view('index', compact('slideshow', 'side_one', 'side_two', 'berita', 'forum', 'vlog', 'kategoris'));
    }

    public function berita()
    {
        $kategoris = Categories::all();
        $beritas = Post::where('type', '1')->paginate(15);
        $side_one = Post::latest()->where('type', '1')->get();
        $side_two= Post::latest()->where('type', '3')->get();
        return view('berita', compact('beritas', 'side_one', 'side_two', 'kategoris'));
    }

    public function vlog()
    {
        $kategoris = Categories::all();
        $vlogs = Post::where('type', '3')->paginate(15);
        $side_one = Post::latest()->where('type', '1')->get();
        $side_two= Post::latest()->where('type', '3')->get();
        return view('vlog', compact('vlogs', 'side_one', 'side_two', 'kategoris'));
    }

    public function forum()
    {
        $forums = Post::where('type', '2')->get();
        $side_one = Post::latest()->where('type', '1')->get();
        $side_two= Post::latest()->where('type', '3')->get();
        return view('forum', compact('side_one', 'side_two', 'forums'));
    }

    public function about()
    {
        $side_one = Post::latest()->where('type', '1')->get();
        $side_two= Post::latest()->where('type', '3')->get();
        return view('about', compact('side_one', 'side_two'));
    }

    public function contact()
    {
        $side_one = Post::latest()->where('type', '1')->get();
        $side_two= Post::latest()->where('type', '3')->get();
        return view('contact', compact('side_one', 'side_two'));
    }

    public function post(Post $post)
    {
        $side_one = Post::latest()->where('type', '1')->get();
        $side_two= Post::latest()->where('type', '3')->get();
        return view('post', compact('side_one', 'side_two'));
    }

    public function show(Post $post)
    {
        $side_one = Post::latest()->where('type', '1')->get();
        $side_two= Post::latest()->where('type', '3')->get();
        return view('post', compact('side_one', 'side_two', 'post'));
    }

    public function vlogshow(Post $post)
    {
        $side_one = Post::latest()->where('type', '1')->get();
        $side_two= Post::latest()->where('type', '3')->get();
        return view('vlogs', compact('side_one', 'side_two', 'post', 'post_list', 'berita', 'forum', 'vlog', 'slideshow', 'kategori_list', 'administrator_list'));
    }
}
