<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use App\model\Categories;
use App\model\Post;
use App\model\Administrator;

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
        $items->author_       = $request->author_;
        $items->thumbnails_   = $request->thumbnails_;
        $items->title_        = $request->title_;
        $items->slug_         = str_slug($request->title_);
        $items->content_      = $request->content_;
        $items->type_         = $request->type_;
        $items->save();

        return redirect('admin/vlog');
    }

}
