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
        Schema::create('pembelian', function (Blueprint $table) {
                $table->id();
                $table->string('nonota_beli', 15)->unique();
                $table->datetime('tgl_beli');
                $table->double('total_beli');
                $table->unsignedBigInteger('id_distributor');
                $table->unsignedBigInteger('id_users');
                $table->foreign('id_distributor')->references('id')->on('distributor')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pembelian');
    }
};
