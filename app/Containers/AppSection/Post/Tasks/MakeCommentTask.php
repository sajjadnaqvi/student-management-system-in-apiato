<?php

namespace App\Containers\AppSection\Post\Tasks;

use App\Containers\AppSection\Post\Data\Repositories\CommentRepository;
use App\Containers\AppSection\Post\Tasks\FindPostByIdTask;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class MakeCommentTask extends Task
{
    protected CommentRepository $repository;

    public function __construct(CommentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(int $post_id, string $body)
    {
        try {

            $post = app(FindPostByIdTask::class)->run($post_id);
            if(empty($post)){
                throw new NotFoundException("post not found");
            }

            $comment = $this->repository->create([
                'body'=>$body
            ]);

            $post->comments()->save($comment);

            return $post;

            //return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException($exception);
        }
    }
}
