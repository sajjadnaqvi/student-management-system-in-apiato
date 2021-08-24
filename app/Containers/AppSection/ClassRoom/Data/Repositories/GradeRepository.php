<?php

namespace App\Containers\AppSection\ClassRoom\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class GradeRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
    public function model():string{
        return config('classroom.models.grade');
    }
}
