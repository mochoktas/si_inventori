<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'barang_id';

    protected $fillable = [
        'nama'
    ];

    public function inventori(): HasMany
    {
        return $this->hasMany(Inventori::class);
    }

    public $timestamps = false;
}
