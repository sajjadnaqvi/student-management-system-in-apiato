<?php

namespace App\Containers\AppSection\Exam\Actions;

use App\Containers\AppSection\Exam\Tasks\GetAllExamsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllExamsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllExamsTask::class)->addRequestCriteria()->run();
    }
}
