<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class awal extends Model
{
    //
    use HasFactory;

    protected $fillable = ['nik', 'name'];

    // Relasi ke tabel jabatans
    public function datakaryawan()
    {
        return $this->belongsTo(datakaryawan::class, 'datakaryawan');
    }
}
