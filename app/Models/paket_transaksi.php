<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket_transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
      'transaksi_id',
      'paket_id'
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}
