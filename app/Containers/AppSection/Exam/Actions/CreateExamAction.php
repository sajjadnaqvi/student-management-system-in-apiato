<?php

namespace App\Containers\AppSection\Exam\Actions;

use App\Containers\AppSection\Exam\Models\Exam;
use App\Containers\AppSection\Exam\Tasks\CreateExamTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use App\Containers\AppSection\Exam\UI\API\Requests\CreateExamRequest;

class CreateExamAction extends Action
{
    public function run(CreateExamRequest $request): Exam
    {
        $data = $request->sanitizeInput([
            'name'=>$request->name, 
            'date'=>$request->date
        ]);

        return app(CreateExamTask::class)->run($request->name,$request->date);
    }
}
