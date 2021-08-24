<?php

namespace App\Containers\AppSection\User\Models;

use App\Containers\AppSection\Authentication\Traits\AuthenticationTrait;
use App\Containers\AppSection\Authorization\Traits\AuthorizationTrait;
use App\Ship\Parents\Models\UserModel;
use Illuminate\Notifications\Notifiable;
use App\Containers\AppSection\Exam\Models\Exam_result;
use App\Containers\AppSection\ClassRoom\Models\Attendance;
use App\Containers\AppSection\ClassRoom\Models\ClassRoom;


class User extends UserModel
{
    use AuthorizationTrait;
    use AuthenticationTrait;
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'device',
        'platform',
        'gender',
        'phone',
        'status',
        'birth',
        'social_provider',
        'social_token',
        'social_refresh_token',
        'social_expires_in',
        'social_token_secret',
        'social_id',
        'social_avatar',
        'social_avatar_original',
        'social_nickname',
        'email_verified_at',
        'is_admin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'is_admin' => 'boolean',
        'email_verified_at' => 'datetime',
    ];


    public function examReuslt(){
        return $this->hasMany(Exam_result::class);
    }

    public function attendance(){
        return $this->hasMany(Attendance::class);
    }
    public function teacherClass(){
        return $this->hasMany(ClassRoom::class);
    }

    public function studentClass(){
        return $this->BelongsToMany(ClassRoom::class,'classrooms_students','student_id','classroom_id');
    }

}
