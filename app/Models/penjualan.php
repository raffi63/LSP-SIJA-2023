<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    protected $fillable = [
    'nonota_jual',
    'tgl_jual',
    'total_jual',
    'id_users'
    ];

    public function fusers(){
    return $this->belongsTo(User::class, 'id_users', 'id');
    }

    public function fdpenjualan(){
    return $this->belongsTo(detail_penjualan::class, 'id', 'id_penjualan');
    }
}
