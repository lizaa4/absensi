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
        // dd($request->all());
        // // cek form validation
        // $this->validate($request, [
        //     'perusahaan' => 'required',
        //     'nama' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);    
        $request->validate([
            'perusahaan' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        try {
            $user = new User();
            $user->perusahaan = $request->access;
            $user->name     = $request->nama;
            $user->email     = $request->email;
            $user->password   = bcrypt($request->password);
            $user->save();
            echo "Masuk";
        } catch (\Throwable $th) {
            echo $th;
        }
        // dd($request->access);
       
        // // jika salah, kembali ke halaman login
        // return redirect()->back()->with('success', 'Registrasi berhasil');
    }
    public function update ()
    {
        return view('update');
    }
}