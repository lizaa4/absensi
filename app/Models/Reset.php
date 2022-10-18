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
    protected $fillable = [
        'email',
        'token',
    ];

    protected $hidden = [
        'email',
        'password',
        'remember_token',
    ];
}