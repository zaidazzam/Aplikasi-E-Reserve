<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor_invoice',
        'homestay_id',
        'check_in',
        'check_out',
        'total_harga',
        'nama_depan',
        'notelp',
        'biaya_admin',
        'email',
        'bukti_transaksi',
        'no_referensi',
        'total_masa_inap',
        'status_payment',
        'status_homestay',
        'status_transfer_pemilik',
        'peserta'
    ];
    
    //include homestay
    public function homestay()
    {
        return $this->belongsTo(Homestay::class);
    }
}
