<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasHomestay extends Model
{
    use HasFactory;

    public $table = 'fasilitas_homestay';

    protected $fillable = [
        'fasilitas_id', 'homestay_id'
    ];

    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class, 'fasilitas_id', 'id');
    }
}
