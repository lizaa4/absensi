<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use PharIo\Manifest\Email;

class kirimEmailController extends Controller
{
    public function kirimEmail(Request $request)
    {
        // // DB::beginTransaction();
        // try {
        //     $url = URL::to('/kirimEmail') . '/reset-password'; 
        //     $data = MPerson::where('id', $request->nik)->first();

        //     if ($data != id) {
        //         $data->link = $url . '/kirimEmail' . $data->id;
        //         Email::to($data->email)->send(new kirimEmail($data->nama, $data->link));

        //         return response()->json([
        //             'status' => 'ada'
        //         ]);

            // } else {
            //     return response()->json([
            //         'status' => 'kosong'
            //     ]);
            // }
        
    //     } catch (\Exception $e) {
    //         // DB::rollback();
    //         return response()->json([
    //             'status' => 'gagal',
    //             'message' => $e->getMessage()
    //         ]);
    //     }        
    }


    public function reset()
    {
        return redirect()->route('reset.proses')->with(['Password Telah Diganti']);
        return view('reset-password');
    }
    


}