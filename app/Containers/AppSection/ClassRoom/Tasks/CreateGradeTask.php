<?php

namespace App\Containers\AppSection\ClassRoom\Tasks;

use App\Containers\AppSection\ClassRoom\Data\Repositories\GradeRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateGradeTask extends Task
{
    protected GradeRepository $repository;

    public function __construct(GradeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run( string $name)
    {
        try {
            return $this->repository->create([
                'name'=>$name
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException($exception);
        }
    }
}
