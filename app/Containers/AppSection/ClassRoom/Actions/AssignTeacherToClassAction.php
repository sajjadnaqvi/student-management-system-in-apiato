<?php

namespace App\Containers\AppSection\ClassRoom\Actions;

use App\Containers\AppSection\ClassRoom\Models\ClassRoom;
use App\Containers\AppSection\ClassRoom\Tasks\AssignTeacherToClassTask;
use App\Ship\Parents\Actions\Action;
use App\Containers\AppSection\ClassRoom\UI\API\Requests\AssignTeacherToClassRequest;

class AssignTeacherToClassAction extends Action
{
    public function run(AssignTeacherToClassRequest $request): ClassRoom
    {
        $data = $request->sanitizeInput([
            'teacher_id'=>$request->teacher_id
        ]);

        return app(AssignTeacherToClassTask::class)->run($request->id, $data);
    }
}
