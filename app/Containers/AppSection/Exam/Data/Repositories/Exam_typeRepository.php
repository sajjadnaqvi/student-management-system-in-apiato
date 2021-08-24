<?php

namespace App\Containers\AppSection\Exam\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class Exam_typeRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
