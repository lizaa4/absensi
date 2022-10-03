<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function destroy( $date)
    {
        $timezone = "Asia/Jakarta";
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');
        $timestamp = $date->format('Y-m-d H:i:s');

        return redirect()->route('absen')->with(['Telah melakukan Absen']);
    }
    public function simpanAbsen(Request $request)
    {
        var_dump($request->all()); exit();
    }
    public function tampilan(Request $request)
    {
        return view('tampilan');
    }
    
}