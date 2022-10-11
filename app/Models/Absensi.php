(16 sloc)  379 Bytes

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
  
}