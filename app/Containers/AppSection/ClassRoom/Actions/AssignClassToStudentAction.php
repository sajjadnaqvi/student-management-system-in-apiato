<?php

namespace App\Containers\AppSection\ClassRoom\Actions;

use App\Containers\AppSection\ClassRoom\Models\ClassRoom;
use App\Containers\AppSection\ClassRoom\Tasks\AssignClassToStudentTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use App\Containers\AppSection\ClassRoom\UI\API\Requests\AssignClassToStudentRequest;

class AssignClassToStudentAction extends Action
{
    public function run(AssignClassToStudentRequest $request): ClassRoom
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(AssignClassToStudentTask::class)->run($request->classroom_id, $request->student_id);
    }
}
