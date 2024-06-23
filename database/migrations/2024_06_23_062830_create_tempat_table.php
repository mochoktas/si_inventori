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
        Schema::create('tempat', function (Blueprint $table) {
            $table->bigInteger('tempat_id')->primary()->autoIncrement();
            $table->string('nama', length: 100);
            $table->string('alamat', length: 100);
            $table->string('deskripsi', length: 100);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tempat');
    }
};
