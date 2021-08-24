<?php

namespace App\Containers\AppSection\ClassRoom\Models;

use App\Ship\Parents\Models\Model;
use App\Containers\AppSection\User\Models\User;
use App\Containers\Vendor\Beaner\Traits\HasUuid;



class Attendance extends Model
{
    use HasUuid;
    protected $table = 'attendances';
    protected $fillable = [
        'date',
        'status',
        'remark',
        'student_id'
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
    protected string $resourceKey = 'Attendance';

    public function student(){
        return $this->belongsTo(User::class,'student_id');
    }
}
