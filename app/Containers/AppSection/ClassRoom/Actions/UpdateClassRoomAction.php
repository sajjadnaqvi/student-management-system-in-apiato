<?php

namespace App\Containers\AppSection\ClassRoom\Actions;

use App\Containers\AppSection\ClassRoom\Models\ClassRoom;
use App\Containers\AppSection\ClassRoom\Tasks\UpdateClassRoomTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateClassRoomAction extends Action
{
    public function run(Request $request): ClassRoom
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateClassRoomTask::class)->run($request->id, $data);
    }
}
