<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengeluaran extends Model
{
    use HasFactory;

    protected $fillable = [
      'nama_pengeluaran',
      'harga',
      'keterangan',
      'nota'
    ];
    
}
