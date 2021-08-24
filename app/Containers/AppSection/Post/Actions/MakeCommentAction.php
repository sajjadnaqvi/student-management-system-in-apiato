<?php

namespace App\Containers\AppSection\Post\Actions;

use App\Containers\AppSection\Post\Models\Comment;
use App\Containers\AppSection\Post\Tasks\MakeCommentTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class MakeCommentAction extends Action
{
    public function run(Request $request): Comment
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(MakeCommentTask::class)->run($request->post_id,$request->body);
    }
}
