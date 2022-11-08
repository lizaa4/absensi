<?php

namespace App\Http\Controllers;

use App\Models\Reset;
use App\Models\User;
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
        return redirect("/login")->with('error', 'Email atau Password salah');
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
        $data['title'] = 'Change Password';
        return view('password.forgot-password', $data);
    }
    // fungsi reset
    public function reset($id)
    {
        
        return view('password.reset-password', compact('id'));
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
        $user = Auth::user()->id;
        return view('ubah-password', compact('user'));
        
    }
    public function password_Resets(Request $request) 
        {   
            $request->validate([
           'email'   => 'requied|unique:users',
           'token'  => 'required',
           'created_at'  => 'required',
        
            ]);
            dd($request->all());
           $Reset = new Reset();
          
           $Reset->email = $request->email;
           $Reset->token = $request->token;
           $Reset->created_at = $request->created_at;

           $Reset->save();

           return redirect()->route('resets')->with(['success' => 'Data Berhasil Disimpan!']);  
        

         
        }

    public function resets(Request $request) {
        //   dd($request->all());
        $Reset = new Reset();
        // instansiasi (bikin objek baru/manggil objek)
        $Reset->id_user =  Auth::user()->id;
        $Reset->email = $request->email;
        $Reset->token = $request->token;
        $Reset->created_at = $request->created_at;
    //    dd($User);
        $Reset->save();
    }
    // public function kotakmasuk ()
    // {
    //     return view('password.kotak-masuk');
    // }
    public function resetProses (Request $request) 
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user->password   = bcrypt($request->password);
        // dd($user);
        $user->save();
        return redirect()->route('login');
    }
    public function ubahProses (Request $request) 
    {
        // dd($request->all());
        $user = User::where('id', Auth::user()->id)->first();
        $user->password   = bcrypt($request->password);
        // dd($user);
        $user->save();
        return redirect()->route('login');
    }
    public function tampilan1() {
        return view('tampilan1');
    }
}