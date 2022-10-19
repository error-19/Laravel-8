<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    //_index method_//
    public function index()
    {
       return view('contact');
    }
    public function phone()
    {
        return view('phone');
    }

    //country method//
    public function country2()
    {
        return view('country');
    }
}
