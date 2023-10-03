<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Post extends Model
{
    use HasFactory;

    protected function user(): BelongsTo {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get all of the post's comments.
     */
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

//    public $fillable = ["title"];//эти поля могут быть заполнены
    public $guarded=[];// какие поля защищены, если пустое, то все доступны

//    public $table ="post";//указать произвольную таблицу

}
