<?php

namespace App\Containers\AppSection\ClassRoom\Tasks;

use App\Containers\AppSection\ClassRoom\Data\Repositories\ClassRoomRepository;
use App\Containers\AppSection\ClassRoom\Data\Repositories\GradeRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateClassRoomTask extends Task
{
    protected ClassRoomRepository $repository;
    protected GradeRepository $gradeRepo;

    public function __construct(ClassRoomRepository $repository,GradeRepository $gradeRepo)
    {
        $this->repository = $repository;
        $this->gradeRepo =$gradeRepo;
    }

    public function run(int $year,string $section, string $grade_id, string $teacher_id=null)
    {
        try {

            $grade = $this->gradeRepo->find($grade_id);
            $class = $this->repository->create([
                'year'=>$year,
                'section'=>$section,
                'teacher_id'=>$teacher_id
            ]);

            $grade->classRoom()->save($class);
            return $class;

            //return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException($exception);
        }
    }
}
