<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Martial extends Model
{
    /** @use HasFactory<\Database\Factories\MartialFactory> */
    use HasFactory;
    protected $guarded = [];
    public function ranks(): HasMany
    {
        return $this->hasMany(Rank::class);
    }
    public function academies(): HasMany
    {
        return $this->hasMany(Academy::class);
    }
    public function users(): HasManyThrough
    {
        return $this->hasManyThrough(User::class, Rank::class);
    }
}
