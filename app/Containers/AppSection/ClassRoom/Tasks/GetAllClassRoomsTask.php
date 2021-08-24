<?php

namespace App\Containers\AppSection\ClassRoom\Tasks;

use App\Containers\AppSection\ClassRoom\Data\Repositories\ClassRoomRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllClassRoomsTask extends Task
{
    protected ClassRoomRepository $repository;

    public function __construct(ClassRoomRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
