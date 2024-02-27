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
        Schema::create('rute', function (Blueprint $table) {
            $table->increments('id_rute');
            $table->unsignedInteger('id_maskapai');
            $table->foreign('id_maskapai')->references('id_maskapai')->on('maskapai')->constrained();
            $table->string('rute_asal');
            $table->string('rute_tujuan');
            $table->date('tanggal_pergi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rute');
    }
};
