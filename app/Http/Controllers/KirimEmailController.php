<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KirimEmailController extends Controller
{
    public function reset(Request $request)
    {
        $user=Email::where('id', Auth::user()->id)->first();
        var_dump($request->data);exit();
    }
}
