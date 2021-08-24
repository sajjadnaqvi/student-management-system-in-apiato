<?php

namespace App\Containers\AppSection\Exam\Actions;

use App\Containers\AppSection\Exam\Models\Exam;
use App\Containers\AppSection\Exam\Tasks\FindExamByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindExamByIdAction extends Action
{
    public function run(Request $request): Exam
    {
        return app(FindExamByIdTask::class)->run($request->id);
    }
}
