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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi');
            $table->string('nama');
            $table->string('username');
            $table->string('email');
            $table->string('alamat');
            $table->string('alamatCadangan');
            $table->string('negara');
            $table->string('provinsi');
            $table->string('kodePos');
            $table->string('paymentMethod');
            $table->string('nama_kartu');
            $table->string('nomor_kartu');
            $table->string('expiration');
            $table->string('cvv');
            $table->timestamps();
            $table->foreign('email')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
