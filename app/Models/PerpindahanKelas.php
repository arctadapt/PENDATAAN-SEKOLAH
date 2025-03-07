<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerpindahanKelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelas_id',
        'jumlah_siswa',
        'mapel',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}

