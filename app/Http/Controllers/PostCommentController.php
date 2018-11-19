<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\model\Post;
use App\model\Comment;
use Illuminate\Support\Facades\Session;

class PostCommentController extends Controller
{
    public function comment(Request $request, Post $post){

      if (!Session::get('login')) {
          return redirect()->back()->with('alert', 'Kamu harus login dulu');
      } else {
        $post->comments()->create(array_merge(
          $request->only('message'),
          ['user_id' => $request->session()->get('id')]
        ));

        return redirect()->back();
      }
    }
}
