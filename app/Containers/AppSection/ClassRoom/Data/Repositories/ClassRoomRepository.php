<?php

namespace App\Containers\AppSection\ClassRoom\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class ClassRoomRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

    public function model():string{
        return config('classroom.models.classroom');
    }
}
