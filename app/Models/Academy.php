<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Academy extends Model
{
    protected $guarded = [];
    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot(["martial_id", "rank_id"]);
    }
    public function martialStyle(): BelongsTo
    {
        return $this->belongsTo(Martial::class);
    }
}
