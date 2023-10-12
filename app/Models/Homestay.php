<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', // Add the 'users_id' field to the fillable array
        'harga',
        'nama',
        'alamat',
        'latitude',
        'longitude',
        'deskripsi',
        'kebijakan',
        'jumlah_kamar',
        'kapasitas_kamar',
        'image',
        'status'
    ];

    public function user()
{
    return $this->belongsTo(User::class, 'users_id');
}
}
