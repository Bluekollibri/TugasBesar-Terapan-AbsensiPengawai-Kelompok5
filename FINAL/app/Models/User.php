<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Pastikan ini diimpor
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = ['username', 'password', 'NamaKaryawan'];

    protected $hidden = ['password'];

    public $timestamps = true;
}

