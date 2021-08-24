<?php

namespace App\Containers\AppSection\ClassRoom\UI\API\Transformers;

use App\Containers\AppSection\ClassRoom\Models\Attendance;
use App\Ship\Parents\Transformers\Transformer;

class AttendanceTransformer extends Transformer
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

    public function transform(Attendance $attendance): array
    {
        $response = [
            'object' => $attendance->getResourceKey(),
            'id' => $attendance->id,
            'date' => $attendance->date,
            'status' => $attendance->status,
            'remark' => $attendance->remark,
            'student_id' => $attendance->student_id,
            'created_at' => $attendance->created_at,
            'updated_at' => $attendance->updated_at,
            'readable_created_at' => $attendance->created_at->diffForHumans(),
            'readable_updated_at' => $attendance->updated_at->diffForHumans(),

        ];

        $response = $this->ifAdmin([
            'real_id'    => $attendance->id,
            // 'deleted_at' => $attendance->deleted_at,
        ], $response);

        return $response;
    }
}
