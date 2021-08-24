<?php

namespace App\Containers\AppSection\ClassRoom\Actions;

use App\Containers\AppSection\ClassRoom\Models\Course;
use App\Containers\AppSection\ClassRoom\Tasks\CreateCourseTask;
use App\Ship\Parents\Actions\Action;
use App\Containers\AppSection\ClassRoom\UI\API\Requests\CreateCourseRequest;

class CreateCourseAction extends Action
{
    public function run(CreateCourseRequest $request): Course
    {
        $data = $request->sanitizeInput([
            $request->name,
            $request->description,
            $request->grade_id
        ]);

        return app(CreateCourseTask::class)->run($request->name,$request->description,$request->grade_id);
    }
}
