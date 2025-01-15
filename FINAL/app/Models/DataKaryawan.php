<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataKaryawan extends Model
{
    use HasFactory;

    protected $table = 'data_karyawans';

    protected $fillable = ['nik', 'name', 'alamat', 'jabatan_id', 'departemen_id'];

    // Relasi ke tabel jabatans
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    // Relasi ke tabel items
    public function departemen()
    {
        return $this->belongsTo(Departemen::class);
    }
}

