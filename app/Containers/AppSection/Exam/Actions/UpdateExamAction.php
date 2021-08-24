<?php

namespace App\Containers\AppSection\Exam\Actions;

use App\Containers\AppSection\Exam\Models\Exam;
use App\Containers\AppSection\Exam\Tasks\UpdateExamTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateExamAction extends Action
{
    public function run(Request $request): Exam
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateExamTask::class)->run($request->id, $data);
    }
}
