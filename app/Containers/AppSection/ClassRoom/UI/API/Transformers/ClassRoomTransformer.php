<?php

namespace App\Containers\AppSection\ClassRoom\UI\API\Transformers;

use App\Containers\AppSection\ClassRoom\Models\ClassRoom;
use App\Ship\Parents\Transformers\Transformer;

class ClassRoomTransformer extends Transformer
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
    function getStudent($student){
        //$student = [];
        $stu =[];
        if(empty($student)){
            array_push($stu,"no student is assigned to class");
        }
      foreach($student as $s){
         //$student.push($s->name);
         array_push($stu,$s->name);
        }
        return $stu;
    }
    

    public function transform(ClassRoom $classroom): array
    {
        $response = [
            'object' => $classroom->getResourceKey(),
            'id' => $classroom->id,
            'garde'=>$classroom->grade_id,
            'section'=>$classroom->section,
            'teacher'=>$classroom->teacher,
            'year'=>$classroom->year,
            'students'=>$this->getStudent($classroom->students),
            'created_at' => $classroom->created_at,
            'updated_at' => $classroom->updated_at,
            'readable_created_at' => $classroom->created_at->diffForHumans(),
            'readable_updated_at' => $classroom->updated_at->diffForHumans(),

        ];

        

        $response = $this->ifAdmin([
            'real_id'    => $classroom->id,
            // 'deleted_at' => $classroom->deleted_at,
        ], $response);

        return $response;
    }
}
