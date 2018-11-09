<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use App\model\Categories;
use App\model\Post;
use App\model\Administrator;
use Image;

class PostController extends Controller
{

    public function all(){
        $post_list = Post::orderBy('id', 'DESC')->get();
        return view('admin.all', compact('post_list'));
    }

    public function post(){
        $administrator_list = Administrator::all();
        $kategori_list = Categories::all();
        return view('admin.post', compact('kategori_list', 'administrator_list'));
    }

    public function InsertPost(Request $request){
        $items                = new Post;
        $items->categories_id = $request->categories_id;
        $items->author        = $request->author;
        $image                = $request->file('thumbnails');
        $filename             = time().'-'.$image->getClientOriginalName();
        Image::make($image->getRealPath())->save(public_path('upload/posts/'.$filename));
        $items->thumbnails    = $filename;
        $items->title         = $request->title;
        $items->slug          = str_slug($request->title);
        $items->content       = $request->content;
        $items->type          = $request->type;
        $items->save();

        return redirect('admin/post');
    }

    public function EditPost(Post $post){
        $administrator_list = Administrator::all();
        $kategori_list = Categories::all();
        return view('admin.edit', compact('post', 'administrator_list', 'kategori_list'));
    }

    public function UpdatePost(Post $post, Request $request){

          $image                = $request->file('thumbnails');
          $filename             = time().'-'.$image->getClientOriginalName();
          Image::make($image->getRealPath())->save(public_path('upload/posts/'.$filename));

          $post->update([
            'title'         => $request->title,
            'thumbnails'    => $filename,
            'author'        => $request->author,
            'slug'          => str_slug($request->title),
            'content'       => $request->content,
            'type'          => $request->type,
            'categories_id' => $request->categories_id,
        ]);

        return redirect()->route('admin.all');
    }

    public function DeletePost(Post $post){
        $post->delete();
        return redirect()->route('admin.all');
    }
}
