<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Rank extends Model
{
    /** @use HasFactory<\Database\Factories\RankFactory> */
    use HasFactory;
    protected $guarded = [];
    function discipline(): BelongsTo
    {
        return $this->belongsTo(Martial::class);
    }
    function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot(["academy_id", "aquired_date", "isCurrent"]);
    }
}
