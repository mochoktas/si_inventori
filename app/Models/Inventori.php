<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventori extends Model
{
    use HasFactory;
    protected $table = 'inventori';
    protected $primaryKey = 'inventori_id';

    protected $fillable = [
        'tempat_id',
        'barang_id',
        'stok'
    ];

    public function tempat(): BelongsTo
    {
        return $this->belongsTo(Tempat::class, 'tempat_id', 'tempat_id');
    }

    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'barang_id');
    }

    public $timestamps = false;
}
