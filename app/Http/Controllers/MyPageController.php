<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MyPageController extends Controller
{
    public function my_page(){
        $name = \Session::get('name', '失敗');
        $email = \Session::get('email','失敗');
        return view('mypage')->with('name',$name);
    }

    public function logout(){
        return view('/');
    }

    public function delete(){
        
        $email = session()->get('email');

        User::where('email','=', $email)->delete();

        session()->flush();
        \Session::flash('delete_msg','アカウント情報ハンド履歴など全て削除しました');
    
        return view('index');
    }
}
