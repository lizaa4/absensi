<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoingController extends Controller
{
    public function doing() 
    {
        return view('doing');
    }
}
