<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register');
    }

    // proses login
    public function register(Request $request)
    {   
        try {
            // dd($request->all());
            $request->validate([
                'access' => 'required',
                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]);
            $user = new User();
            $user->perusahaan = $request->access;
            $user->name     = $request->username;
            $user->email     = $request->email;
            $user->password   = bcrypt($request->password);
            // dd($user);
            $user->save();
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        // jika salah, kembali ke halaman login
        return redirect()->back()->with('success', 'Registrasi berhasil');
    }
    public function update ()
    {
        return view('update');
    }
}