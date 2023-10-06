<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image_homestay extends Model
{
    use HasFactory;

    protected $fillable = [
        'homestay_id',
        'image'
    ];
    
    //include homestay
    public function homestay()
    {
        return $this->belongsTo(Homestay::class);
    }
}
