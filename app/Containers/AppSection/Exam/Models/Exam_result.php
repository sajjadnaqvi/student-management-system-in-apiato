<?php

namespace App\Containers\AppSection\Exam\Models;

use App\Ship\Parents\Models\Model;
use App\Containers\AppSection\Exam\Models\Exam;
use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\ClassRoom\Models\Course;
use App\Containers\Vendor\Beaner\Traits\HasUuid;


class Exam_result extends Model
{
    use HasUuid;
    protected $table = 'exams_results';
    protected $fillable = [
        'marks',
        'exam_id',
        'student_id',
        'course_id'
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
    protected string $resourceKey = 'Exam_result';

    public function exam(){
        return $this->belongsTo(Exam::class,'exam_id');
    }

    public function student(){
        return $this->belongsTo(User::class,'student_id');
    }

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }

    //public function examable(){
    //    return $this->morphTo();
   // }
}
