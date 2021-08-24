<?php

namespace App\Containers\AppSection\ClassRoom\Tasks;

use App\Containers\AppSection\ClassRoom\Data\Repositories\ClassRoomRepository;
use App\Containers\AppSection\User\Data\Repositories\UserRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class AssignClassToStudentTask extends Task
{
    protected ClassRoomRepository $repository;
    protected UserRepository $userRepo;

    public function __construct(ClassRoomRepository $repository,UserRepository $userRepo)
    {
        $this->repository = $repository;
        $this->userRepo = $userRepo;
    }

    public function run(string $classroom_id,string $student_id)
    {
        try {
            $user = $this->userRepo->find($student_id);
            $class = $this->repository->find($classroom_id);

            $class->students()->attach($user);
            return $class;
            //return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
