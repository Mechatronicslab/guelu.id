<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use App\model\Categories;

class KategoriController extends Controller
{
    public function kategori()
    {
        $kategori_list = Categories::all();
        return view('admin.kategori', compact('kategori_list'));
    }

    public function in_kategori()
    {
        return view('admin.kategori.in_kategori');
    }

    public function InsertKategori(Request $request)
    {
        $items = new Categories;
        $items->title = $request->title;
        $items->slug = $request->slug;
        $items->desc = $request->desc;
        $items->save();

        return redirect('admin/kategori');
    }

}
