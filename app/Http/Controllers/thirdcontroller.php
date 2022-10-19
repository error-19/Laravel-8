<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class thirdcontroller extends Controller
{
    public function birthday(){
        return view('birthday');
    }
}
