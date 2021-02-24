<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Porker;

class HandprevewController extends Controller
{
    public function hand_prevew(){

        $name = \Session::get('name', '失敗');
        $email = \Session::get('email','失敗');

        $db_check = $this->email_check($email);

        if ($db_check === false){

            \Session::flash('err_msg','まだハンドが登録されていません');
            return view('user_store');
        }

        $data = Porker::where('email', '=', $email)->get();

        $f_value = array($data[0]['f_suit']);
        $f_num   = array();
        $s_value = array($data[0]['s_suit']);
        $s_num   = array();

        $f_suit = array();
        $s_suit = array();

        $count = 0;
        foreach ($data as $hand){

            $f_f = $data[$count]['f_suit'];
            $f_return = $this->suit_choice($f_f);
            $f_suit  = array_merge($f_suit,array($f_return));

            $f_num   = array_merge($f_num,array($data[$count]['f_number']));

            $s_s = $data[$count]['s_suit'];
            $s_return = $this->suit_choice($s_s);
            $s_suit  = array_merge($s_suit,array($s_return));

            $s_num   = array_merge($s_num,array($data[$count]['s_number']));

            $count += 1;
        }
        dd($f_num);
       

        // return view('hand_prevew',compact('f_suit','f_num','s_suit','s_num'));
        return view('hand_prevew');
    }

    public function email_check($email){

        $user = Porker::where('email', '=', $email)->first();

        if ($user === null) {
            return false;
        } else {
            return true;
        }
    }

    public function suit_choice($suit){
        if($suit == 'S'){
            return 0;
        } elseif($suit == 'H'){
            return 13;
        } elseif($suit == 'C'){
            return 26;
        } elseif($suit == 'D'){
            return 39;
        }
    }
}
