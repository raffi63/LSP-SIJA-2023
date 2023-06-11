<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    protected $fillable = ['judul', 'deskripsi', 'tanggal', 'id_users', 'status', 'konten'];

    public function fusers(){
    return $this->belongsTo(User::class, 'id_users', 'id');
    }
}
