<?php

namespace App\Containers\AppSection\Exam\Tasks;

use App\Containers\AppSection\Exam\Data\Repositories\ExamRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateExamTask extends Task
{
    protected ExamRepository $repository;

    public function __construct(ExamRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
