<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pembelian extends Model
{
    use HasFactory;
    protected $table = 'detail_pembelian';
    protected $fillable = [
    'id_pembelian',
    'tgl_kadaluarsa',
    'harga_beli',
    'jumlah_beli',
    'subtotal_beli',
    'persen_margin_jual',
    'id_obat'
    ];

    public function fpembelian(){
    return $this->belongsTo(pembelian::class, 'id_pembelian', 'id');
    }
    public function fobat(){
    return $this->belongsTo(obat::class, 'id_obat', 'id');
    }
}
