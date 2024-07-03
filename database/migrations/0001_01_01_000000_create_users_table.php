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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama', length: 100);
            $table->string('email_pribadi')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('jobdesk', length: 100)->nullable();
            $table->string('data_yang_kurang', length: 100)->nullable();
            $table->string('pendidikan', length: 25)->nullable();
            $table->string('nik_ta', length: 10)->nullable();
            $table->string('tempat_lahir', length: 100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat', length: 100)->nullable();
            $table->string('no_kk', length: 16)->nullable();
            $table->string('no_ktp', length: 16)->nullable();
            $table->string('no_hp_teknisi', length: 15)->nullable();
            $table->string('no_hp_keluarga', length: 15)->nullable();
            $table->string('nama_keluarga_yang_bisa_dihubungi', length: 100)->nullable();
            $table->string('nama_ibu', length: 100)->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->string('bpjs_ketenagakerjaan', length: 11)->nullable();
            $table->string('bpjs_kesehatan', length: 13)->nullable();
            $table->string('merk_kendaraan', length: 25)->nullable();
            $table->string('nopol_kendaraan', length: 25)->nullable();
            $table->string('baju', length: 10)->nullable();
            $table->integer('sepatu')->nullable();
            $table->integer('celana')->nullable();
            $table->string('crew_id', length: 10)->nullable();
            $table->string('labourcode', length: 10)->nullable();
            $table->string('telegram_id', length: 15)->nullable();
            $table->string('username', length: 25)->nullable();
            $table->integer('role');
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
