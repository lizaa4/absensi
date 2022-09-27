<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    // proses login
    public function login(Request $request)
    {
        // cek form validation
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // cek apakah email dan password benar
        if (auth()->attempt(request(['email', 'password']))) {
            return redirect()->route('profile');
        }

        // jika salah, kembali ke halaman login
        return redirect()->back()->with('error', 'Email atau Password salah');
    }

    // fungsi logout
    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
    // fungsi forgot
    public function forgot()
    {
        //auth()-> forgot();

        //return redirect()->route('forgot');

        return view('password.forgot-password');
    }
    // fungsi reset
    public function reset()
    {
        // auth()-> reset();

        // return redirect()->route('reset');

        return view('password.reset-password');
    }
    //fungsi index 
    public function profil()
    {
        return redirect()->route('profil');

        return view('index');
    }
    //fungsi update
    public function update ()
    {
        return view('update');
    }
    //fungsi ubah
    public function ubah()
    {
        return view('ubah-password');
    }

}