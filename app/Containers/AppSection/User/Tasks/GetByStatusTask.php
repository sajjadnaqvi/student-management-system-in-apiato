<?php

namespace App\Containers\AppSection\User\Tasks;

use App\Containers\AppSection\User\Data\Repositories\UserRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class GetByStatusTask extends Task
{
    protected UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($status)
    {
        try {
            return $this->repository->where('status','=',$status)->get();
        }
        catch (Exception $exception) {
            throw new NotFoundException($exception);
        }
    }
}
