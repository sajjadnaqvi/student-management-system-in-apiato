<?php

namespace App\Containers\AppSection\Post\Actions;

use App\Containers\AppSection\Post\Models\Post;
use App\Containers\AppSection\Post\Tasks\UpdatePostTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdatePostAction extends Action
{
    public function run(Request $request): Post
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdatePostTask::class)->run($request->id, $data);
    }
}
