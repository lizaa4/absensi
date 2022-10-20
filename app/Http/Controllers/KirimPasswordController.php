<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;



class KirimPasswordController extends Controller
{  public function ubahProses (Request $request) 
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user->password   = bcrypt($request->password);
        // dd($user);
        $user->save();
        return redirect()->route('login');
    }
    public function kirimPassword (Request $request) 
    {
        // dd($request->all());
        try {
            $user = User::where('id', Auth::user()->id)->first();
        $user->password   = bcrypt($request->password_baru);
        $user->save();
         DB::rollback();
            return response()->json([
                'status' => 'berhasil',
                
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'gagal',
                'message' => $e->getMessage()
            ]);
        }       
    
    }
}
