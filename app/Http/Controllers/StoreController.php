<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StoreController extends Controller
{
    public function store(){
        return view('user_store');
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
        
        User::create($data);

        return view('user_store_fin');
    }
}
