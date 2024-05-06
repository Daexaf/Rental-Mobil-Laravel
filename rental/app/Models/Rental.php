<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_order',
        'id_mobil',
        'id_user',
        'tanggal_mulai',
        'tanggal_selesai',
        'status_peminjaman',
        'tanggal_pengembalian',
        'biaya_sewa',
    ];

    // Relasi dengan model Car (mobil)
    public function car()
    {
        return $this->belongsTo(Car::class, 'id_mobil');
    }

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
