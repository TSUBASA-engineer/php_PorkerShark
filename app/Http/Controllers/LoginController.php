<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function input_login(Request $request){

        $validator = Validator::make($request->all(),[
            'Input_Email' => 'required',               
            'InputPassword' => 'required',  
        ]);

        if($validator->fails()){
            \Session::flash('err_msg','両方入力してください');
            return redirect('login');
        }

        $email = $request->Input_Email;
        $pass  = $request->InputPassword;

        $data = [ 
            'email'=> $email,
            'password' => $pass
        ];

        dd($db_check = $this->login_check($data));

    }

    public function login_check($data){

        $user = User::where('email', '=', $data['email'], 'and', 'password', '=', $data['password'])->first();

        if ($user === null) {
            return false;
        } else {
            return true;
        }

    }
}
