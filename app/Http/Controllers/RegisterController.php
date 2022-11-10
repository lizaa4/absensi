<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            if ($request->password == $request->password_confirm) {
                $user = new User();
                $user->perusahaan = $request->access;
                $user->name     = $request->username;
                $user->email     = $request->email;
                $user->password   = bcrypt($request->password);
                // dd($user);
                $user->save();
            }
            else{
                // echo ("password tidak sama");
                return redirect("/register")->with('error', 'Password tidak sama');
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        // jika salah, kembali ke halaman login
        return redirect("/register")->with('success', 'Registrasi berhasil');
    }
    public function update()
    {
        return view('update');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
