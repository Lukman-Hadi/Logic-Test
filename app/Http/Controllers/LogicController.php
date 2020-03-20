<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicController extends Controller
{
    public function index(){
       return view('logic');
    }
    public function Logic(Request $data){
        $angka=$data->angka;
        $result = preg_replace("/[^0-9]/", "", $angka);
        return view('hasilloop',compact('result'));

    }
}
