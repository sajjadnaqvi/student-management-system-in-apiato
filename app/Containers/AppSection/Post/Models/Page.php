<?php

namespace App\Containers\AppSection\Post\Models;
use App\Containers\AppSection\Post\Models\Comment;

use App\Ship\Parents\Models\Model;

class Page extends Model
{
    protected $table ="page";
    protected $fillable = [

    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Page';

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
}
