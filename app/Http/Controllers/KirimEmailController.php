<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kirimEmailControlle extends Controller
{
    public function kirimEmail (Request $request)
    {
        var_dump($request->all());
        return view('kirimEmail');
    }

}