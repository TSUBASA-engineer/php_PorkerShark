<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StoreController extends Controller
{
    public function store(){
        return view('user_store');
    }

    public function email_check($email){

        $user = User::where('email', '=', $email)->first();

        if ($user === null) {
            return false;
        } else {
            return true;
        }
    }

    public function registration(Request $request){

        $email = $request->Input_Email;
        $pass  = $request->InputPassword1;
        $name  = $request->Input_User;

        
        $data = [
            'name' => $name, 
            'email'=> $email,
            'password' => $pass
        ];
        
        $db_check = $this->email_check($data['email']);
        
        if ($db_check === true){

            \Session::flash('err_msg','すでにメールアドレスが登録されています');
            return view('user_store');

        } else {

            User::create($data);
            return view('user_store_fin',['data' => $data]);

        }
    }
}
