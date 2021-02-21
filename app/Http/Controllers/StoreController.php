<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class StoreController extends Controller
{
    public function store(){
        return view('user_store');
    }


    public function registration(Request $request){

        
        $validator = Validator::make($request->all(),[

            'Input_User' => 'required',  
            'Input_Email' => 'required',               
            'InputPassword' => 'required',  
        ]);

        if($validator->fails()){
            \Session::flash('err_msg','全て入力してください');
            return redirect('store');
        }



        $email = $request->Input_Email;
        $pass  = $request->InputPassword;
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
            
            session()->put('email', $data['email']);
            
            User::create($data);

            $value = User::where('email','=', $data['email'])->get('name');
            $name = $value[0]['name'];
            $input =[
                'name' => $name,
                'email' => $email
            ];
            
            $this->session_register($input);


            return view('mypage')->with('name',$name);

        }
    }


    public function email_check($email){

        $user = User::where('email', '=', $email)->first();

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
