<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tempat extends Model
{
    use HasFactory;
    protected $table = 'tempat';
    protected $primaryKey = 'tempat_id';

    protected $fillable = [
        'nama',
        'alamat',
        'image'
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public $timestamps = false;
}
