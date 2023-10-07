<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'servie_tambahan_id',
        'transaksi_id',
    ];

    public function transaksi()
    {
        return $this->belongsTo(transaksi::class);
    }

    public function service_tambahan()
    {
        return $this->belongsTo(service_tambahan::class);
    }
}
