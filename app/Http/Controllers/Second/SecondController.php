<?php

namespace App\Http\Controllers\Second;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function name()
    {
       // return [1, 2, 3];
       return response('Hello World', 200)
->header('Content-Type', 'text/plain');

    }
}
