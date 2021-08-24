<?php

namespace App\Containers\AppSection\Exam\Tasks;

use App\Containers\AppSection\Exam\Data\Repositories\Exam_resultRepository;
use App\Containers\AppSection\Exam\Data\Repositories\ExamRepository;
use App\Containers\AppSection\ClassRoom\Data\Repositories\CourseRepository;
use App\Containers\AppSection\User\Data\Repositories\UserRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateExamResultTask extends Task
{
    protected Exam_resultRepository $repository;
    protected ExamRepository $examRepo;
    protected CourseRepository $courseRepo;
    protected UserRepository $userRepo;

    public function __construct(Exam_resultRepository $repository, ExamRepository $examRepo, CourseRepository $courseRepo, UserRepository $userRepo)
    {
        $this->repository = $repository;
        $this->examRepo = $examRepo;
        $this->courseRepo = $courseRepo;
        $this->userRepo = $userRepo;
    }

    public function run(string $marks,string $exam_name, string $course_id,string $student_id)
    {
        try {
            $exam = $this->examRepo->find($exam_name);

            if(empty($exam)){
                throw new CreateResourceFailedException($exception);
            }

            $result= $this->repository->create([
                'marks'=> $marks,
                'course_id'=>$course_id,
                'student_id'=>$student_id,
                
            ]);
            $exam->examResult()->save($result);

            //$course = $this->courseRepo->find($course_id);
            //$course->examResult()->save($result);

           // $student = $this->userRepo->find($student_id);
          //  $student->examResult()->save($result);

            return $result;
            //return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException($exception);
        }
    }
}
