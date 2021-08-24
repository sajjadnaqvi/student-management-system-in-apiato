<?php

namespace App\Containers\AppSection\Post\Actions;

use App\Containers\AppSection\Post\Models\Post;
use App\Containers\AppSection\Post\Tasks\FindPostByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindPostByIdAction extends Action
{
    public function run(Request $request): Post
    {
        return app(FindPostByIdTask::class)->run($request->id);
    }
}
