<?php

namespace App\Containers\AppSection\Exam\Actions;

use App\Containers\AppSection\Exam\Models\Exam_result;
use App\Containers\AppSection\Exam\Tasks\FindResultByStudentIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use App\Containers\AppSection\Exam\UI\API\Requests\FindResultByStudentIdRequest;


class FindResultByStudentIdAction extends Action
{
    public function run(FindResultByStudentIdRequest $request): Exam_result
    {
        return app(FindResultByStudentIdTask::class)->run($request->id);
    }
}
