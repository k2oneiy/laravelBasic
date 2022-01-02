<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthController extends Controller
{

    public function __construct(){
        $this->middleware('month');
    }

    public function Nummonth(Request $request,$number){
        $user = $request->input('user');
        if($number==1){
            return 'January'.$user;
        }
        else if($number==2){
            return 'Febrauary'.$user;
        }
        else if($number==3){
            return 'March'.$user;
        }
    }
}
