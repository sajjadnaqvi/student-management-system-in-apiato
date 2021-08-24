<?php

namespace App\Containers\AppSection\Exam\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class Exam_resultRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'marks'=>'=',
        'course_id'=>'=',
        'exam_id'=>'='
    ];

    public function model():string
    {
        return config('exam.models.examResult');
    }
}
