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
            $table->string('alamat', length: 100)->nullable();
            $table->string('image')->nullable();
            // $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('tempat_id');
            $table->foreign('tempat_id')->references('tempat_id')->on('tempat')->onDelete('cascade');
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
