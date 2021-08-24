<?php

namespace App\Containers\AppSection\Exam\Tasks;

use App\Containers\AppSection\Exam\Data\Repositories\Exam_resultRepository;
use App\Containers\AppSection\Exam\Data\Repositories\ExamRepository;
use App\Containers\AppSection\ClassRoom\Data\Repositories\CourseRepository;
use App\Containers\AppSection\User\Data\Repositories\UserRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindResultByStudentIdTask extends Task
{
    protected Exam_resultRepository $repository;

    public function __construct(Exam_resultRepository $repository)
    {
        $this->repository = $repository;

    }

    public function run($id)
    {
        try {
            return $this->repository->find($id)->first();
        }
        catch (Exception $exception) {
            throw new NotFoundException($exception);
        }
    }
}
