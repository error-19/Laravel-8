<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    //_index method_//
    public function index()
    {
        # code...
       return view('contact');
    }
    public function phone()
    {
        # code...
        return view('phone');
    }
}
