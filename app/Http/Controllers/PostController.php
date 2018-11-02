<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function all(){
        return view('admin.all');
    }

    public function post(){
        return view('admin.post');
    }

    public function vlog(){
        return view('admin.vlog');
    }

    public function in_vlog(){
        return view('admin.vlog.in_vlog');
    }

    public function kategori(){
        return view('admin.kategori');
    }

    public function in_kategori(){
        return view('admin.kategori.in_kategori');
    }

    public function store(){

    }
}
