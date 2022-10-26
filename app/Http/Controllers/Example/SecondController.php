<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function test(){
        // return "Its come from another controller";
         //return redirect()->away('https://www.google.com');
         return redirect()->back()->with('success', 'student inserted!');
    }
}
