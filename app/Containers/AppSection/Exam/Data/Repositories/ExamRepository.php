<?php

namespace App\Containers\AppSection\Exam\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class ExamRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'name'=>'like',
        'start_date'=>'=',
        //'examResult'=>'='
    ];

    public function model():string
    {
        return config('exam.models.exam');
    }
}
