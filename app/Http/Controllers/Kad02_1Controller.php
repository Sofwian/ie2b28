<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kad02_1Controller extends Controller
{
    //
    public function index(){
        $lang = array('PHP','JSP','Ruby','Perl','Python');
        $message ="これはコントローラからブレードに渡したメッセージです";
        return view('Kad02_1',compact('message','lang'));
    }
}


