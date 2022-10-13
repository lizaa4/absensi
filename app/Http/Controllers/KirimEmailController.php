<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use PharIo\Manifest\Email;

class kirimEmailController extends Controller
{
    public function kirimEmail(Request $request)
    {
        // DB::beginTransaction();
        try {
            $url = URL::to('/kirimEmail') . '/reset-password'; 
            $data = MPerson::where('id', $request->nik)->first();

            if ($data != id) {
                $data->link = $url . '/kirimEmail' . $data->id;
                Email::to($data->email)->send(new kirimEmail($data->nama, $data->link));

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

    public function passwordResets(Request $request) 
    {   
            $request->validate([
           'email'   => 'requied',
           'token'  => 'required',
           'created_at'  => 'required',
        
            ]);
           $Reset = new Reset();
          
           $Reset->email = $request->email;
           $Reset->token = $request->token;
           $Reset->save();

           return redirect()->route('resets')->with(['success' => 'Data Berhasil Disimpan!']);  
        

         
        }

    public function resets(Request $request) {
         dd($request->all());
        $Reset = new Reset();
        // instansiasi (bikin objek baru/manggil objek)
        $Reset->id_user =  Auth::user()->id;
        $Reset->email = $request->email;
        $Reset->token = $request->token;
        $Reset->created_at = $request->created_at;
        $Reset->save();
    }


}