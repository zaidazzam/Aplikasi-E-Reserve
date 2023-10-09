<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_tambahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_service_tambahan',
        'harga',
    ];
    
}
