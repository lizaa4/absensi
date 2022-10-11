<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
// class extends ini adalah model(mengkoneksikan tabel yan telah dibuat)
{
    // use HasFactory;
    protected $table = 'tb_absensi';
    // protected harus diisi
    /**
     * fillable
     *
     * @var array
     */
<<<<<<< HEAD
  
=======
    protected $fillable = [
        'id_absensi',
        'id_detail_user',
        'lattitude',
        'longitude'
        
    ];
>>>>>>> cbccb2251212027a58821d0dc1dcde0f66bd158e
}