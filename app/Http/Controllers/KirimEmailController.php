<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Reset;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Symfony\Component\Mime\Email;

// use PharIo\Manifest\Email;

class kirimEmailController extends Controller
{
    public function kirimEmail(Request $request)
    {
        // DB::beginTransaction();
       
        try {
            // $url = URL::to('/') . '/reset'; 
            $url = 'http://127.0.0.1:8000/reset'; 
            $data=User::where('email', $request->Email)->first();
            // dd($data->email);
        if($data != null){

                $data->link = $url . '/' . $data->id;
                Mail::to($data->email)->send(new SendMail($data->nama, $data->link));

                return response()->json([
                    'status' => 'ada'
                ]);

            } else {
                return response()->json([
                    'status' => 'kosong'
                ]);
            }
        
        } catch (\Exception $e) {
            // DB::rollback();
            return response()->json([
                'status' => 'gagal',
                'message' => $e->getMessage()
            ]);
        }        
    }

    public function password_Resets(Request $request) 
    {   
        $request->validate([
       'email'   => 'requied|unique:users',
       'token'  => 'required',
       'created_at'  => 'required',
    
        ]);
        // dd($request->all());
       $Reset = new Reset();
      
       $Reset->email = $request->email;
       $Reset->token = $request->token;
       $Reset->created_at = $request->created_at;

       $Reset->save();

       return redirect()->route('resets')->with(['success' => 'Data Berhasil Disimpan!']);  
    
    }
    
    public function resets(Request $request) {
        // dd($request->all());
      $Reset = new Reset();
      // instansiasi (bikin objek baru/manggil objek)
      $Reset->id_user =  Auth::user()->id;
      $Reset->email = $request->email;
      $Reset->token = $request->token;
      $Reset->created_at = $request->created_at;
  //    dd($User);
      $Reset->save();
  }


}