<?php

namespace App\Containers\AppSection\Post\Models;

use App\Ship\Parents\Models\Model;

class Comment extends Model
{
    protected $table = "comment";
    protected $fillable = [
        'body',
        'commentable_id',
        'commentable_type'
    ];

    protected $attributes = [

    ];

    protected $hidden = [
        'commentable_type',
        'commentable_id'
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
    protected string $resourceKey = 'Comment';

    public function commentable(){
        return $this->morphTo();
    }
}
