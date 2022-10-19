<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class kirimPasswordController extends Controller
{
    public function kirimPassword (Request $request) 
    {
        try {
            $url = 'http://127.0.0.1:8000/reset'; 
            $data=User::where('password', $request->password)->first();
            dd($data->password);
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
}
