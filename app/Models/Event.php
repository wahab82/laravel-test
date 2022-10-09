<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function workshops(): HasMany
    {
        return $this->hasMany(Workshop::class, 'event_id');
    }
}
