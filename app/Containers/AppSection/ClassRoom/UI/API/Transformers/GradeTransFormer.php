<?php

namespace App\Containers\AppSection\ClassRoom\UI\API\Transformers;

use App\Containers\AppSection\ClassRoom\Models\Grade;
use App\Ship\Parents\Transformers\Transformer;

class GradeTransFormer extends Transformer
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

    public function transform(Grade $grade): array
    {
        $response = [
            'object' => $grade->getResourceKey(),
            'id' => $grade->getHashedKey(),
            'name' => $grade->name,
            'class'=>$grade->classRoom,
            'created_at' => $grade->created_at,
            'updated_at' => $grade->updated_at,
            'readable_created_at' => $grade->created_at->diffForHumans(),
            'readable_updated_at' => $grade->updated_at->diffForHumans(),

        ];

        $response = $this->ifAdmin([
            'real_id'    => $grade->id,
            // 'deleted_at' => $grade->deleted_at,
        ], $response);

        return $response;
    }
}
