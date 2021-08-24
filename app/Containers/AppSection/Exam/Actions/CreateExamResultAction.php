<?php

namespace App\Containers\AppSection\Exam\Actions;

use App\Containers\AppSection\Exam\Models\Exam_result;
use App\Containers\AppSection\Exam\Tasks\CreateExamResultTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use App\Containers\AppSection\Exam\UI\API\Requests\CreateExamResultRequest;

class CreateExamResultAction extends Action
{
    public function run(CreateExamResultRequest $request): Exam_result
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateExamResultTask::class)->run($request->marks, $request->exam_name, $request->course_id,$request->student_id);
    }
}
