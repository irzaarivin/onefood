<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    public function up() {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug');
            $table->string('toko');
            $table->string('lokasi');
            $table->integer('harga');
            $table->string('thumb');
            $table->enum('kategori', ['minuman', 'makanan']);
            $table->timestamps();
            $table->foreign('toko')->references('nama')->on('tokos');
        });
    }

    public function down() {
        Schema::dropIfExists('food');
    }

};