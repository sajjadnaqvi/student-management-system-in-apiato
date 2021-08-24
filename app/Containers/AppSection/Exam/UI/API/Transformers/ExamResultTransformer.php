<?php

namespace App\Containers\AppSection\Exam\UI\API\Transformers;

use App\Containers\AppSection\Exam\Models\Exam_result;
use App\Ship\Parents\Transformers\Transformer;

class ExamResultTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    public function transform(Exam_result $exam_result): array
    {
        $response = [
            'object' => $exam_result->getResourceKey(),
            'id' => $exam_result->getHashedKey(),
            'marks' => $exam_result->marks,
            'exam_name' => $exam_result->exam['name'],
            'course_name'=>$exam_result->course['name'],
            'student_name' => $exam_result->student['name'],
            'course_id' => $exam_result->course_id,
            'created_at' => $exam_result->created_at,
            'updated_at' => $exam_result->updated_at,
            'readable_created_at' => $exam_result->created_at->diffForHumans(),
            'readable_updated_at' => $exam_result->updated_at->diffForHumans(),

        ];

        $response = $this->ifAdmin([
            'real_id'    => $exam_result->id,
            // 'deleted_at' => $exam_result->deleted_at,
        ], $response);

        return $response;
    }
}
