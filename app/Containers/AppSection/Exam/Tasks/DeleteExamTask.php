<?php

namespace App\Containers\AppSection\Exam\Tasks;

use App\Containers\AppSection\Exam\Data\Repositories\ExamRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteExamTask extends Task
{
    protected ExamRepository $repository;

    public function __construct(ExamRepository $repository)
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
