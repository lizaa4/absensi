<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KirimEmailController extends Controller
{
    public function index(Request $request)
    {
        var_dump($request->data);exit();
    }
}
