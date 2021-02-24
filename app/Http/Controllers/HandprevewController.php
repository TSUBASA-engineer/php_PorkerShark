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
            return view('hand_prevew');
        }

        $data = Porker::where('email', '=', $email)->get();

        $f_value = array($data[0]['f_suit']);
        $f_num   = array();
        $s_value = array($data[0]['s_suit']);
        $s_num   = array();

        $f_suit = array();
        $s_suit = array();

        
        list($f_suit, $f_num) = $this->f_suit_change($data);
        list($s_suit, $s_num) = $this->s_suit_change($data);


        $f_card = $this->card($f_suit,$f_num);
        $s_card = $this->card($s_suit,$s_num);

        $f_card = $this->delete_zero($f_card);
        $s_card = $this->delete_zero($s_card);

        $count = count($f_card);

        dd($count);
        
        return view('hand_prevew',compact('f_card','s_card','count'));
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
        } else {
            return 52;
        }
    }

    public function f_suit_change($request){

        $count = 0;
        $suit = array();
        $num   = array();
        foreach ($request as $hand){

            $f = $request[$count]['f_suit'];
            $return = $this->suit_choice($f);
            $suit  = array_merge($suit,array($return));

            $num   = array_merge($num,array($request[$count]['f_number']));

            $count += 1;
        }

        return array($suit, $num);
    }

    public function s_suit_change($request){

        $count = 0;
        $suit = array();
        $num   = array();
        foreach ($request as $hand){

            $f = $request[$count]['s_suit'];
            $return = $this->suit_choice($f);
            $suit  = array_merge($suit,array($return));

            $num   = array_merge($num,array($request[$count]['s_number']));

            $count += 1;
        }

        return array($suit, $num);
    }

    public function card($request_suit,$request_num){

        $count = 0;

        $card = array();

        foreach($request_suit as $value){

            $card = array_merge($card,array($request_suit[$count] + $request_num[$count]));

            $count += 1;
        }
        return $card;
    }

    public function delete_zero($request){
        $count = 0;
        foreach($request as $value){

            if($request[$count] == '52'){
                unset($request[$count]);
            }
            $count += 1;
        }

        return $request = array_values($request);
    }
}
