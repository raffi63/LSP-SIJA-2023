<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    protected $fillable = [
    'nonota_beli',
    'tgl_beli',
    'total_beli',
    'id_distributor',
    'id_users'
    ];

    public function fdistributor(){
    return $this->belongsTo(distributor::class, 'id_distributor', 'id');
    }
    public function fusers(){
    return $this->belongsTo(User::class, 'id_users', 'id');
    }
}
