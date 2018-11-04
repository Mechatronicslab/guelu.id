<?php

namespace App\Http\Controllers;

use App\model\User;
use App\model\Categories;
use App\model\Post;
use App\model\Administrator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_list = Post::all();        
        if (!Session::get('login')) {
            return redirect('login')->with('alert', 'Kamu harus login dulu');
        } else {
            return view('admin/index', compact('post_list'));
        }
    }

    public function login(){
      $post_list = Post::all();
      if (Session::get('login')) {
          return redirect('admin');
      } else {
          return view('login', compact('post_list'));
      }
    }

    public function doLogin(Request $request){
       $email = $request->email;
       $password = $request->password;
       $data = User::where('email',$email)->first();
       if(count($data) > 0){ //apakah email tersebut ada atau tidak
           if(Hash::check($password,$data->password)){
               Session::put('name',$data->name);
               Session::put('email',$data->email);
               Session::put('login',TRUE);
               return redirect('admin');
           }
           else{
               return redirect('login')->with('alert','Password atau Email, Salah !'.Hash::check($password,$data->password));
           }
       }
       else{
           return redirect('login')->with('alert','Password atau Email, Salah!');
       }
   }

   public function register(Request $request){
        $post_list = Post::all();
        return view('register', compact('post_list'));
    }

    public function doLogout(){
      Session::flush();
      return redirect('login')->with('alert','Kamu sudah logout');
   }

    public function doRegister(Request $request){
        $this->validate($request, [
            'nama_depan' => 'required|min:4',
            'nama_blkg' => 'required|min:4',
            'nama_lengkap' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'username' => 'required|min:4',
            'password' => 'required',
            'verifi_password' => 'required|same:password',
        ]);
        $data =  new User();
        $data->first_name = $request->nama_depan;
        $data->last_name = $request->nama_blkg;
        $data->full_name = $request->nama_lengkap;
        $data->email= $request->email;
        $data->username= $request->username;
        $data->password= bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
}