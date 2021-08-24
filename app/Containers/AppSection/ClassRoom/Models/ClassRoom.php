<?php

namespace App\Containers\AppSection\ClassRoom\Models;

use App\Ship\Parents\Models\Model;
use App\Containers\AppSection\ClassRoom\Models\ClassRoom;
use App\Containers\AppSection\User\Models\User;
use App\Containers\Vendor\Beaner\Traits\HasUuid;



class ClassRoom extends Model
{
    use HasUuid;
    protected $table = 'classrooms';
    protected $fillable = [
        'year',
        'grade_id',
        'section',
        'teacher_id'
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
    protected string $resourceKey = 'ClassRoom';

    public function grade(){
        return $this->belongsTo(ClassRoom::class,'grade_id');
    }

    public function teacher(){
        return $this->belongsTo(User::class,'teacher_id');
    }

    public function students(){
        return $this->belongsToMany(User::class,'classrooms_students','classroom_id','student_id');
    }
}
