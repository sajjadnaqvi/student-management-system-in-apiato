<?php

namespace App\Containers\AppSection\ClassRoom\Models;

use App\Ship\Parents\Models\Model;
use App\Containers\AppSection\ClassRoom\Models\Grade;
use App\Containers\AppSection\ClassRoom\Models\Course;
use App\Containers\Vendor\Beaner\Traits\HasUuid;



class Grade extends Model
{
    use HasUuid;
    protected $table = 'grades';
    protected $fillable = [
        'name'
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
    protected string $resourceKey = 'Grade';

    public function classRoom(){
        return $this->hasMany(ClassRoom::class);
    }
    
    public function course(){
        return $this->hasMany(Course::class);
    }
}
