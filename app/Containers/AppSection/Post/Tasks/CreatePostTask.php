<?php

namespace App\Containers\AppSection\Post\Tasks;

use App\Containers\AppSection\Post\Data\Repositories\PostRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreatePostTask extends Task
{
    protected PostRepository $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
