<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'email_pribadi',
        'password',
        'jobdesk',
        'data_yang_kurang',
        'pendidikan',
        'nik_ta',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_kk',
        'no_ktp',
        'no_hp_teknisi',
        'no_hp_keluarga',
        'nama_keluarga_yang_bida_dihubungi',
        'nama_ibu',
        'tanggal_masuk',
        'bpjs_ketenagakerjaan',
        'bpjs_kesehatan',
        'merk_kendaraan',
        'nopol_kendaraan',
        'baju',
        'sepatu',
        'celana',
        'crew_id',
        'labourcode',
        'telegram_id',
        'username',
        'role',
        'tempat_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function tempat(): BelongsTo
    {
        return $this->belongsTo(Tempat::class, 'tempat_id', 'tempat_id');
    }
}
