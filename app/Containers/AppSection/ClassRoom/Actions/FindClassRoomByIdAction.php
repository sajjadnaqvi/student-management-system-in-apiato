<?php

namespace App\Containers\AppSection\ClassRoom\Actions;

use App\Containers\AppSection\ClassRoom\Models\ClassRoom;
use App\Containers\AppSection\ClassRoom\Tasks\FindClassRoomByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindClassRoomByIdAction extends Action
{
    public function run(Request $request): ClassRoom
    {
        return app(FindClassRoomByIdTask::class)->run($request->id);
    }
}
