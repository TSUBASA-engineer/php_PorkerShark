<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Porker;

class PorkerController extends Controller
{
    public function hand_store(){
        session()->forget('commit');
        $name = \Session::get('name', '失敗');
        
        return view('hand_store')->with('name',$name);
    }

    public function hand_put(Request $request){
        $email = \Session::get('email', '失敗');
        if($request->all() == NULL){
            $data = [
                'email' => $email,
                'f_suit' => 0,
                'f_number' => 0,
                's_suit' => 0,
                's_number' => 0
            ];

            Porker::create($data);
            \Session::put('commit', 'よく感情で参加しなかったですね！');

            return view('hand_store');
        }
        $input = $request->all();
        $keys = array_keys($input);

        $f_hand = $keys[0];
        $s_hand = $keys[1];

        $first_hand = $this->card_check($f_hand);
        $second_hand = $this->card_check($s_hand);
        
        $email = \Session::get('email', '失敗');

        $data = [
            'email' => $email,
            'f_suit' => $first_hand[0],
            'f_number' => $first_hand[1],
            's_suit' => $second_hand[0],
            's_number' => $second_hand[1]
        ];
        

        Porker::create($data);

        \Session::put('commit', '登録できました！');

        return view('hand_store');

    }

    public function hand_store_reload(){
        session()->forget('commit');
        return redirect('/hand_store');
    }

    public function card_check($card){

        if($card % 13 == 0){
            $number = 13;
        } else{
            $number = $card % 13;
        }

        if($card / 13 > 0 && $card / 13 <= 1){
            $suit = 'S';
            return array($suit, $number);
        } elseif($card / 13 > 1 && $card / 13 <= 2){
            $suit = 'H';
            return array($suit, $number);
        } elseif($card / 13 > 2 && $card / 13 <= 3){
            $suit = 'C';
            return array($suit, $number);
        } elseif($card / 13 > 3){
            $suit = 'D';
            return array($suit, $number);
        }
    }
}
