<?php

namespace App\Containers\AppSection\ClassRoom\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class AttendanceRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

    public function model():string{
        return config('classroom.models.attendance');
    }
}
