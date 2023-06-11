<?php

namespace App\Models;

use App\Http\Controllers\penjualanController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    use HasFactory;
    protected $table = 'detail_penjualan';
    protected $fillable = [
    'id_penjualan',
    'jumlah_jual',
    'harga_jual',
    'subtotal_jual',
    'id_obat',
    ];

    public function fpenjualan(){
    return $this->belongsTo(penjualan::class, 'id_penjualan', 'id');
    }
    public function fobat(){
    return $this->belongsTo(obat::class, 'id_obat', 'id');
    }
}
