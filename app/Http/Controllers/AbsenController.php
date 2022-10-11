<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use Illuminate\Support\Facades\Auth;

class AbsenController extends Controller
{
    public function absen(Request $request) 
    {
        return view('absen');
    }   
    public function history(Request $request) 
    {
        return view('history');
    } 
    // public function destroy( $date)
    // {
    //     $timezone = "Asia/Jakarta";
    //     $tanggal = $date->format('Y-m-d');
    //     $localtime = $date->format('H:i:s');
    //     $timestamp = $date->format('Y-m-d H:i:s');
    
    public function simpanAbsen(Request $request)
    {
        var_dump($request->all()); exit();
        return view('tampilan');
    }
    public function Absensi(Request $request) 
    {   
            $request->validate([
           'access'   => 'requied',
           'lattitude'  => 'required',
           'longitude'  => 'required',
        
            ]);
           $absensi = new Absensi();
          
           $absensi->lattitude = $request->lattitude;
           $absensi->longitude = $request->longitude;
           $absensi->save();

           return redirect()->route('absen')->with(['success' => 'Data Berhasil Disimpan!']);  
        

         
        }
        public function tampilan() {
            return view('tampilan1');
        }
        public function tampilan1() {
            return view('tampilan1');
        }
        public function simpan(Request $request) {
            // dd($request->all());
            $absensi = new Absensi();
            // instansiasi (bikin objek baru/manggil objek)
            $absensi->id_user =  Auth::user()->id;
            $absensi->lattitude = $request->lat;
            $absensi->longitude = $request->lon;
            $absensi->save();
        }

    }



