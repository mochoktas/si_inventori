<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    use HasFactory;
    protected $table = 'team';
    protected $primaryKey = 'team_id';
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'user_id_1',
        'user_id_2',
        'tempat_id'
    ];

    public function inventori(): HasMany
    {
        return $this->hasMany(Inventori::class);
    }

    public function tempat(): BelongsTo
    {
        return $this->belongsTo(Tempat::class, 'tempat_id', 'tempat_id');
    }

    public function user1(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id_1', 'id');
    }

    public function user2(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id_2', 'id');
    }
}
