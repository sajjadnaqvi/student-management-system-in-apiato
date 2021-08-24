<?php

namespace App\Containers\AppSection\ClassRoom\Actions;

use App\Containers\AppSection\ClassRoom\Tasks\GetAllClassRoomsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllClassRoomsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllClassRoomsTask::class)->addRequestCriteria()->run();
    }
}
