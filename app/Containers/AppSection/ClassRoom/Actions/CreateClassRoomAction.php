<?php

namespace App\Containers\AppSection\ClassRoom\Actions;

use App\Containers\AppSection\ClassRoom\Models\ClassRoom;
use App\Containers\AppSection\ClassRoom\Tasks\CreateClassRoomTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateClassRoomAction extends Action
{
    public function run(Request $request): ClassRoom
    {
        $data = $request->sanitizeInput([
            'year'=>$request->year,
            'section'=>$request->section,
            'grade_id'=>$request->grade_id
        ]);

        return app(CreateClassRoomTask::class)->run($request->year,$request->section,$request->grade_id);
    }
}
