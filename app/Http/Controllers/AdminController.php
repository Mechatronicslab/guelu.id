<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin/index');
    }

    public function news(){
        return view('admin/news');
    }

    public function vlog(){
        return view('admin/vlog');
    }

    public function forum(){
        return view('admin/forum');
    }

    public function kategori(){
        return view('admin/kategori');
    }

    public function in_news(){
        return view('admin/news/in_news');
    }
}
