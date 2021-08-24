<?php

namespace App\Containers\AppSection\Exam\UI\API\Transformers;

use App\Containers\AppSection\Exam\Models\Exam;
use App\Ship\Parents\Transformers\Transformer;

class ExamTransformer extends Transformer
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

    public function transform(Exam $exam): array
    {
        $response = [
            'object' => $exam->getResourceKey(),
            'id' => $exam->id,
            'exam_name'=>$exam->name,
            'start_date'=>$exam->start_date,
            'created_at' => $exam->created_at,
            'updated_at' => $exam->updated_at,
            'readable_created_at' => $exam->created_at->diffForHumans(),
            'readable_updated_at' => $exam->updated_at->diffForHumans(),

        ];

        $response = $this->ifAdmin([
            'real_id'    => $exam->id,
            // 'deleted_at' => $exam->deleted_at,
        ], $response);

        return $response;
    }
}
