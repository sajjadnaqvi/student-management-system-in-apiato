<?php

namespace App\Containers\AppSection\Exam\Tasks;

use App\Containers\AppSection\Exam\Data\Repositories\ExamRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllExamsTask extends Task
{
    protected ExamRepository $repository;

    public function __construct(ExamRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
