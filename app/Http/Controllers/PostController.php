<?php

namespace App\Http\Controllers;

use Request;
use App\model\Post;
use App\model\Categories;

class PostController extends Controller
{

    public function all(){
        return view('admin.all');
    }

    public function post(){
        $categories = Categories::all();
        return view('admin.post', compact('categories'));
    }

    public function store_post(){

    }
}
