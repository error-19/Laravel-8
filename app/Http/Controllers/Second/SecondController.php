<?php

namespace App\Http\Controllers\Second;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function name()
    {
        return view('Name');
    }
}
