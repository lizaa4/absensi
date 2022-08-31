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
        //dd($request->all());
        // cek form validation
        $this->validate($request, [
            'access' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);     
        User::create([
            'access' => $request->access,
            'name'     => $request->nama,
            'email'     => $request->email,
            'password'   => bcrypt($request->password)
        ]);
        // jika salah, kembali ke halaman login
        return redirect()->back()->with('success', 'Registrasi berhasil');
    }
}