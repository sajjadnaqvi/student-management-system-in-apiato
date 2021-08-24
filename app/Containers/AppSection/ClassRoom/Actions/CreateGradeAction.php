<?php

namespace App\Containers\AppSection\ClassRoom\Actions;

use App\Containers\AppSection\ClassRoom\Models\Grade;
use App\Containers\AppSection\ClassRoom\Tasks\CreateGradeTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use App\Containers\AppSection\ClassRoom\UI\API\Requests\CreateGradeRequest;

class CreateGradeAction extends Action
{
    public function run(CreateGradeRequest $request)
    {
        $data = $request->sanitizeInput([
            'name'=>$request->name
        ]);

        return app(CreateGradeTask::class)->run($request->name);
    }
}
