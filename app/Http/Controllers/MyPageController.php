<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Porker;

class MyPageController extends Controller
{
    public function my_page(){
        $name = \Session::get('name', '失敗');
        $email = \Session::get('email','失敗');

        
            $all_hands = Porker::where('email','=', $email)->get();
            $join_hands = Porker::where('email','=',$email)->where('s_number','!=',0)->get();
            
            $all_count = $this->join_count($all_hands);
            $all_join = $this->join_count($join_hands);

            if($all_join != 0){
                $count = round($all_join / $all_count,2)*100;
            } else {
                $count = 0;
            }
            
            return view('mypage')->with([
                "count" => $count,
                "name" => $name,
                "all_count" => $all_count,
                "all_join" => $all_join
             ]);
    }

    public function join_count($request){

        if($request != NULL){
            $all_count = 0;

            foreach ($request as $hand){
                $all_count += 1; 
            }
        } else {
            $all_count = 0;
        }
        return $all_count;
    }

    public function logout(){
        return view('/');
    }

    public function delete(){
        
        $email = session()->get('email');

        User::where('email','=', $email)->delete();
        Porker::where('email','=', $email)->delete();

        session()->flush();
        \Session::flash('delete_msg','アカウント情報ハンド履歴など全て削除しました');
    
        return view('index');
    }
}
