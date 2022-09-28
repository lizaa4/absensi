<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KirimEmailController extends Controller
{
    public function index(Request $request)
    {
        $user=Email::where('id', Auth::user()->id)->first();
        var_dump($request->data);exit();
    }
}
