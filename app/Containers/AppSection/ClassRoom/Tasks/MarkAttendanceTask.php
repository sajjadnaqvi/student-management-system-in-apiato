<?php

namespace App\Containers\AppSection\ClassRoom\Tasks;

use App\Containers\AppSection\ClassRoom\Data\Repositories\AttendanceRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class MarkAttendanceTask extends Task
{
    protected AttendanceRepository $repository;

    public function __construct(AttendanceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(string $date,bool $status, string $student_id,string $remark=null )
    {
        try {
            return $this->repository->create([
                "date"=>$date,
                "status"=>$status,
                "remark"=>$remark,
                "student_id"=>$student_id,
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException($exception);
        }
    }
}
