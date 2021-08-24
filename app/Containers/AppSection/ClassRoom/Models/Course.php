<?php

namespace App\Containers\AppSection\ClassRoom\Models;

use App\Ship\Parents\Models\Model;
use App\Containers\AppSection\ClassRoom\Models\Grade;
use App\Containers\AppSection\Exam\Models\Exam_result;
use App\Containers\Vendor\Beaner\Traits\HasUuid;


class Course extends Model
{
    use HasUuid;
    protected $table = 'courses';
    protected $fillable = [
        'name',
        'description',
        'grade_id'
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
    protected string $resourceKey = 'Course';

    public function grade(){
        return $this->belongsTo(Grade::class,'grade_id');
    }

    public function examResult(){
        return $this->hasMany(Exam::class);
    }
}
