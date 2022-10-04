<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;

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

    //     return redirect()->route('absen')->with(['Telah melakukan Absen']);
    // }
    public function simpanAbsen(Request $request)
    {
        var_dump($request->all()); exit();
    }
    public function Absensi(Request $request) 
    {   
            $request->validate([
           'access'   => 'requied',
           'lattitude'  => 'required',
           'longitude'  => 'required',
           'koordinat'  => 'required'
            ]);
           $absensi = new Absen();
           $absensi->koordinat = $request->access;
           $absensi->lattitude = $request->lattitude;
           $absensi->longitude = $request->longitude;
           $absensi->save();
        

         
        }

    }



