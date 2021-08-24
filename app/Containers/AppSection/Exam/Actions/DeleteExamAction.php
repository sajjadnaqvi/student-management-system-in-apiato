<?php

namespace App\Containers\AppSection\Exam\Actions;

use App\Containers\AppSection\Exam\Tasks\DeleteExamTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteExamAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteExamTask::class)->run($request->id);
    }
}
