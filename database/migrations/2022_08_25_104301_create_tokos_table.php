<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create('tokos', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->string('slug');
            $table->string('lokasi');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('tokos');
    }

};
