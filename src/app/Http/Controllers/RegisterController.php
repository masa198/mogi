<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RegisterController;
use App\Models\Register;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
// ログイン認証機能

class RegisterController extends Controller
{
    public function index()   //会員登録画面表示
    {
    return view ('register');
    }

    public function store(RegisterRequest $request)   //会員データをDBに送信
    {
        $data = $request ->only(['name', 'email', 'password']);
        Register::create($data);
        return redirect('/login');
    }

    public function registerForm()  //ログイン画面表示
    {
    return view ('login');
    }

    public function display()  //打刻画面の表示
    {
    return view ('stamp');
    }

    public function work()   //日付別画面表示
    {
    return view ('data');
    }


    public function login_stamp(Request $request)   //ログインボタンを押したら、データ照合してほしい
    {
       $credentials = $request->only(['email', 'password']);

       if (Auth::attempt($credentials))
       {
         return redirect('/stamp');
       } else {
         return redirect('/login')->with('error', 'ログインに失敗しました。正しいメールアドレスとパスワードを入力して下さい。');
       }
    }

}