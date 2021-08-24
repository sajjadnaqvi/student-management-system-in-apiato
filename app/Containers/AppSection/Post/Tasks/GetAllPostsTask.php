<?php

namespace App\Containers\AppSection\Post\Tasks;

use App\Containers\AppSection\Post\Data\Repositories\PostRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllPostsTask extends Task
{
    protected PostRepository $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
