<?php

namespace App\Http\Controllers;

use App\Models\Reset;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->route('absen');
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

        // return redirect()->route('forgot');

        return view('password.forgot-password');
    }
    // fungsi reset
    public function reset()
    {
        // auth()-> user();

        //  return redirect()->route('reset');

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
    public function passwordResets(Request $request) 
        { 
            try {
            // dd($request->all());
            $request->validate([
           'email'   => 'requied|email',
           'token'  => 'required',
           'created_at'  => 'required',
        
            ]);
            if (auth()->attempt(request(['email', 'token']))) {
                return redirect()->route('reset');
            }
    
            // dd($request->all());
           $Reset = new Reset();
           $Reset->id_user =  Auth::user()->id;
           $Reset->Email = $request->Email;
           $Reset->token = $request->token;
           $Reset->created_at = $request->created_at;
        // dd($Reset);
           $Reset->save();
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }

           return redirect()->route('resets')->with(['success' => 'Data Berhasil Disimpan!']);  
        

         
        }

    public function resets(Request $request) {
        //  dd($request->all());
        $Reset = new Reset();
        // instansiasi (bikin objek baru/manggil objek)
        $Reset->id_user =  Auth::user()->id;
        $Reset->Email = $request->Email;
        $Reset->token = $request->token;
        $Reset->created_at = $request->created_at;
        // dd($Reset);
        $Reset->save();
    }



}