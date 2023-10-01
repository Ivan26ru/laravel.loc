<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected function user(): BelongsTo {
        return $this->belongsTo('App\Models\User');
    }

    public function comments() {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}
