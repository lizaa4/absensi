<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use PharIo\Manifest\Author;

class ProfileController extends Controller
{
    public function index() {
        $user=User::where('id', FacadesAuth::user()->id)->first();
        return view('index', compact('user'));
    }

    public function update ()
    {
        $user=User::where('id', FacadesAuth::user()->id)->first();
        return view('update', compact('user'));
    }


    public function updateproses(Request $request)
    {   
        try {
            // dd($request->all());
            $request->validate([
                'access' => 'required',
                'nama' => 'required',
                'email' => 'required|email',
                'enskripsi_password' => 'required'
            ]);
            $user = User::where('id', FacadesAuth::user()->id)->first();
            $user->perusahaan = $request->access;
            $user->name     = $request->nama;
            $user->email     = $request->email;
            $user->password   = bcrypt($request->enskripsipassword);
            // dd($user);
            $user->save();
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        // jika salah, kembali ke halaman login
        return redirect()->back()->with('success', 'Registrasi berhasil');
    }

    

}