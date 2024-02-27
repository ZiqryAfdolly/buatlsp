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
        Schema::create('order_detail', function (Blueprint $table) {
            $table->increments('id_order_detail');
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('user')->constrained();
            $table->unsignedInteger('id_penerbangan');
            $table->foreign('id_penerbangan')->references('id_penerbangan')->on('jadwal_penerbangan')->constrained();
            $table->unsignedInteger('id_order');
            $table->foreign('id_order')->references('id_order')->on('order_tiket')->constrained();
            $table->integer('jumlah_tiket');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_detail');
    }
};
