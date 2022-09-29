<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'history';
    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */
    protected $fillable = [
        'id_absensi',
        'id_detail_user',
        'koordinat'
    ];

}