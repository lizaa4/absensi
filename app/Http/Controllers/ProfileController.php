<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        return view('index');
    }

    // fungsi tabel
    public function tabel() {
        return view('tabel');
    }

}