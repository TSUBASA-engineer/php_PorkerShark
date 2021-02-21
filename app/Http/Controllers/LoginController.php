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

        $db_check = $this->login_check($data);

        if ($db_check === false){

            \Session::flash('err_msg','入力内容が間違っています');
            return view('login');

        } else {

            session()->put('email', $data['email']);

            $value = User::where('email','=', $data['email'])->get('name');
            $name = $value[0]['name'];
            $input = [
                'name' => $name,
                'email' => $data['email']
            ];

            $this->session_register($input);

            return view('mypage',)->with('name',$name);

        }

    }

    public function login_check($data){

       $user = User::where('email', $data['email'])->where('password', $data['password'])->first();
        
        if ($user === null) {
            return false;
        } else {
            return true;
        }

    }

    public function session_register($input){

        \Session::put('name', $input['name']);
        \Session::put('email', $input['email']);
    }
}