<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'team';
    protected $primaryKey = 'team_id';

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
}
