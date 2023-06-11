<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
                $table->id();
                $table->string('kode_obat', 30)->unique();
                $table->string('nama_obat', 50)->unique();
                $table->string('merk', 50);
                $table->string('jenis', 50);
                $table->string('golongan', 255);
                $table->string('kemasan', 255);
                $table->string('satuan', 30);
                $table->float('harga_jual');
                $table->Integer('stok');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat');
    }
};
