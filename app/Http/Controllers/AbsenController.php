<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function absen(Request $request) 
    {
        return view('absen');
    } 
    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
    public function index()
    {
        auth()->index();

        return redirect()->route('index');
    }
}