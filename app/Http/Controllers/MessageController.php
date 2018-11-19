<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Message;

class MessageController extends Controller
{
    public function message(Request $request){
      $items = new Message;
      $items->fullname = $request->fullname;
      $items->email = $request->email;
      $items->message = $request->messager;
      $items->save();

      return redirect('contact');
    }
}
