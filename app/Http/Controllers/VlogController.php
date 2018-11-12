<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use App\model\Categories;
use App\model\Post;
use App\model\Administrator;
use Image;

class VlogController extends Controller
{
    public function vlog(){
        $administrator_list = Administrator::all();
        $kategori_list = Categories::all();
        return view('admin.vlog', compact('kategori_list'), compact('administrator_list'));
    }

    public function InsertVlog(Request $request){
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

      return redirect('admin/vlog');
    }

}
