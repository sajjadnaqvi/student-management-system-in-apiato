<?php

namespace App\Containers\AppSection\Exam\Models;

use App\Ship\Parents\Models\Model;

class Exam_type extends Model
{
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
    protected string $resourceKey = 'Exam_type';
}
