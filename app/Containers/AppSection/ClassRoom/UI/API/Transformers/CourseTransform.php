<?php

namespace App\Containers\AppSection\ClassRoom\UI\API\Transformers;

use App\Containers\AppSection\ClassRoom\Models\Course;
use App\Ship\Parents\Transformers\Transformer;

class CourseTransform extends Transformer
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

    public function transform(Course $course): array
    {
        $response = [
            'object' => $course->getResourceKey(),
            'id' => $course->id,
            'name' => $course->name,
            'description' => $course->description,
            'grade_id' => $course->grade_id,
            'created_at' => $course->created_at,
            'updated_at' => $course->updated_at,
            'readable_created_at' => $course->created_at->diffForHumans(),
            'readable_updated_at' => $course->updated_at->diffForHumans(),

        ];

        $response = $this->ifAdmin([
            'real_id'    => $course->id,
            // 'deleted_at' => $course->deleted_at,
        ], $response);

        return $response;
    }
}
