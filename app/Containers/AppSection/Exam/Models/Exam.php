<?php

namespace App\Containers\AppSection\Exam\Models;

use App\Ship\Parents\Models\Model;
use App\Containers\AppSection\Exam\Models\Exam_result;
use App\Containers\Vendor\Beaner\Traits\HasUuid;

class Exam extends Model
{
    use HasUuid;
    protected $table = 'exams';
    protected $fillable = [
        'name',
        'start_date'
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
    protected string $resourceKey = 'Exam';


    public function examResult(){
        return $this->hasMany(Exam_result::class);
    }

    //public function result(){
    //    return $this->morphMany(Exam_Result::class,'examable');
   // }
}
