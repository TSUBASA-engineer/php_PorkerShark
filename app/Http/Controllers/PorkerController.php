<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poreker;

class PorkerController extends Controller
{
    public function hand_store(){
        $name = \Session::get('name', '失敗');
        
        return view('hand_store')->with('name',$name);
    }
}
