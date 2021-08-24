<?php

namespace App\Containers\AppSection\Post\Actions;

use App\Containers\AppSection\Post\Tasks\GetAllPostsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllPostsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllPostsTask::class)->addRequestCriteria()->run();
    }
}
