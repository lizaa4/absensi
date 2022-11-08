<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Facade;

class AbsenController extends Controller
{
    public function absen(Request $request) 
    {
        return view('absen');
    }   
    public function history(Request $request) 
    {
        $user=User::where('id', FacadesAuth::user()->id)->first();
        $absensi=Absensi::where('id_user', FacadesAuth::user()->id)->get();
        // dd($absensi);
        // dd($user);
        return view('history', compact('user', 'absensi')); 
        
    } 

    public function getCreatedAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('l, d F Y');
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
        public function tampilan(Request $request) 
        {
            $user=User::where('id', FacadesAuth::user()->id)->first();
            return view('tampilan', compact('user'));
        }
        
        public function simpan(Request $request) {
            //dd($request->all());
            $absensi = new Absensi();
            // instansiasi (bikin objek baru/manggil objek)
            $absensi->id_user =  Auth::user()->id;
            $absensi->lattitude = $request->lat;
            $absensi->longitude = $request->lon;
            $absensi->save();
            return redirect()->route('tampilan');
        }

    }


