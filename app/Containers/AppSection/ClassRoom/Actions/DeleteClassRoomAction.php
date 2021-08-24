<?php

namespace App\Containers\AppSection\ClassRoom\Actions;

use App\Containers\AppSection\ClassRoom\Tasks\DeleteClassRoomTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteClassRoomAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteClassRoomTask::class)->run($request->id);
    }
}
