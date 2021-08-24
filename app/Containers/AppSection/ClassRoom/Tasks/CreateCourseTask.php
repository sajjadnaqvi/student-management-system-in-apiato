<?php

namespace App\Containers\AppSection\ClassRoom\Tasks;

use App\Containers\AppSection\ClassRoom\Data\Repositories\CourseRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCourseTask extends Task
{
    protected CourseRepository $repository;

    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(string $name,string $description,string $grade_id)
    {
        try {
            return $this->repository->create([
                'name'=>$name,
                'description'=>$description,
                'grade_id'=>$grade_id
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException($exception);
        }
    }
}
