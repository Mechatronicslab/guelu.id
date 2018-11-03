<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VlogController extends Controller
{
    public function vlog(){
        return view('admin.vlog');
    }

    public function in_vlog(){
        return view('admin.vlog.in_vlog');
    }
}
