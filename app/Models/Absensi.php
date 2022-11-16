<?php

namespace App\Models;

// use Illuminate\Support\Carbon;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
// class extends ini adalah model(mengkoneksikan tabel yan telah dibuat)
{
    // use HasFactory;
    protected $table = 'tb_absensi';
    public function getUser()
    {
        return $this->belongsTo('App\Models\User', 'id_user', 'id');
    }
    // protected harus diisi
    /**
     * fillable
     *
     * @var array
     */
    // public function getCreatedAttribute()
    // {
    //     return Carbon::parse($this->attributes['created_at'])
    //         ->translatedFormat('l, d F Y');
    // }
}
