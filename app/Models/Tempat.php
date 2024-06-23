<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    use HasFactory;
    protected $table = 'tempat';
    protected $primaryKey = 'tempat_id';

    protected $fillable = [
        'nama',
        'alamat',
        'deskripsi'
    ];

    public function inventori(): HasMany
    {
        return $this->hasMany(Inventori::class);
    }

    public $timestamps = false;
}
