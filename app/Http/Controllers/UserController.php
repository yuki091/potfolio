<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function postSignup(Request $request)
  {
      // バリデーション
      $this->validate($request,[
        'name' => 'required',
        'email' => 'email|required|unique:users',
        'password' => 'required|min:4',

      
      ]);
     
      // DBインサート
      $user = new User([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
        
      
      ]);
     
      // 保存
      $user->save();
     
      // リダイレクト
      return redirect()->route('home');
    }
    public function getHome(){
      return view('home');
    }
}

