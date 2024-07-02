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
        Schema::create('inventori', function (Blueprint $table) {
            $table->bigInteger('inventori_id')->primary()->autoIncrement();
            $table->bigInteger('barang_id');
            $table->foreign('barang_id')->references('barang_id')->on('barang');
            $table->bigInteger('team_id');
            $table->foreign('team_id')->references('team_id')->on('team');
            $table->string('kondisi', length: 20)->nullable();
            $table->string('sn', length: 100)->nullable();
            $table->string('merk', length: 100)->nullable();
            $table->date('tahun_pembelian')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventori');
    }
};
