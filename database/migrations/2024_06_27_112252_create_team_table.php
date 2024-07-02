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
        Schema::create('team', function (Blueprint $table) {
            $table->bigInteger('team_id')->primary()->autoIncrement();
            $table->string('nama', length: 100);
            $table->unsignedBigInteger('user_id_1')->nullable();
            $table->foreign('user_id_1')->references('id')->on('users');
            $table->unsignedBigInteger('user_id_2')->nullable();
            $table->foreign('user_id_2')->references('id')->on('users');
            $table->bigInteger('tempat_id');
            $table->foreign('tempat_id')->references('tempat_id')->on('tempat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team');
    }
};
