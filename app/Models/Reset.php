<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reset extends Model
{
    use HasFactory;
    protected $table = 'password_resets';
    
    /**
     * hidden
     *
     * @var array<timestamp>
     */
    protected $hidden = [
        'email',
        'token',
        'created_at'
    ];
}