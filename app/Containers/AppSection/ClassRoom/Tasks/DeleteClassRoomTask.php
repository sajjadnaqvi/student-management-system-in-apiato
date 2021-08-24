<?php

namespace App\Containers\AppSection\ClassRoom\Tasks;

use App\Containers\AppSection\ClassRoom\Data\Repositories\ClassRoomRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteClassRoomTask extends Task
{
    protected ClassRoomRepository $repository;

    public function __construct(ClassRoomRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): ?int
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
