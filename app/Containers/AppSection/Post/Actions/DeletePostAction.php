<?php

namespace App\Containers\AppSection\Post\Actions;

use App\Containers\AppSection\Post\Tasks\DeletePostTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeletePostAction extends Action
{
    public function run(Request $request)
    {
        return app(DeletePostTask::class)->run($request->id);
    }
}
