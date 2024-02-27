<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_penerbangan', function (Blueprint $table) {
            $table->increments('id_penerbangan');
            $table->unsignedInteger('id_rute');
            $table->foreign('id_rute')->references('id_rute')->on('rute')->constrained();
            $table->timestamp('waktu_berangkat');
            $table->timestamp('waktu_tiba');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_penerbangan');
    }
};
