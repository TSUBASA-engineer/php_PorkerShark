<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    // 初回アクセス画面
    public function index(){
        return view('index');
    }
}
