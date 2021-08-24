<?php

namespace App\Containers\AppSection\User\Actions;

use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\User\Tasks\GetByStatusTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use App\Containers\AppSection\User\UI\API\Requests\GetByStatusRequest;

class GetByStatusAction extends Action
{
    public function run(GetByStatusRequest $request)
    {
        return app(GetByStatusTask::class)->run($request->status);
    }
}
