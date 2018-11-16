<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use App\model\User;
use App\model\Categories;
use App\model\Post;
use App\model\Administrator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
Use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countNews = Post::where('type', '1')->count();
        $countForum = Post::where('type', '2')->count();
        $countVlog = Post::where('type', '3')->count();
        if (!Session::get('login')) {
            return redirect('login')->with('alert', 'Kamu harus login dulu');
        } else {
            return view('admin/index', compact('countNews', 'countVlog', 'countForum'));
        }
    }

    public function login()
    {
        $side_one = Post::latest()->where('type', '1')->get();
        $side_two= Post::latest()->where('type', '3')->get();
        if (Session::get('login')) {
            return redirect('admin');
        } else {
            return view('login', compact('side_one', 'side_two'));
        }
    }

    public function doLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $data = User::where('email', $email)->first();
        if (count($data) > 0) {
            if (Hash::check($password, $data->password)) {
                Session::put('id', $data->id);
                Session::put('full_name', $data->full_name);
                Session::put('email', $data->email);
                Session::put('level', $data->level);
                Session::put('photos', $data->photos);
                Session::put('login', TRUE);
                if ($data->level == 2) {
                    return redirect('admin');
                } else {
                    return redirect("/");
                }
            } else {
                return redirect('login')->with('alert', 'Password atau Email, Salah !' . Hash::check($password, $data->password));
            }
        } else {
            return redirect('login')->with('alert', 'Password atau Email, Salah!');
        }
    }

    public function register(Request $request)
    {
        $side_one = Post::latest()->where('type', '1')->get();
        $side_two= Post::latest()->where('type', '3')->get();
        return view('register', compact('side_one', 'side_two'));
    }

    public function doLogout()
    {
        Session::flush();
        return redirect('login')->with('alert', 'Kamu sudah logout');
    }

    public function doRegister(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|min:4',
            'last_name' => 'required|min:4',
            'full_name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'username' => 'required|min:4',
            'password' => 'required',
            'level' => '1',
            'verifi_password' => 'required|same:password',
        ]);

        $data = new User();
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->full_name = $request->full_name;
        $data->email = $request->email;
        $data->username = $request->username;
        $image = $request->file('photos');
        $filename = time() . '-' . $image->getClientOriginalName();
        Image::make($image->getRealPath())->save(public_path('upload/profile/' . $filename));
        $data->photos = $filename;
        $data->level = '1';
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect('login')->with('alert-success', 'Kamu berhasil Register');
    }
}
