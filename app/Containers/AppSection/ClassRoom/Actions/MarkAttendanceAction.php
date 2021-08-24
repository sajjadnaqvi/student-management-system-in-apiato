<?php

namespace App\Containers\AppSection\ClassRoom\Actions;

use App\Containers\AppSection\ClassRoom\Models\Attendance;
use App\Containers\AppSection\ClassRoom\Tasks\MarkAttendanceTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use App\Containers\AppSection\ClassRoom\UI\API\Requests\MarkAttendanceRequest;


class MarkAttendanceAction extends Action
{
    public function run(MarkAttendanceRequest $request): Attendance
    {
        $data = $request->sanitizeInput([
            'date'=>$request->date,
            'status'=>$request->status,
            'student_id'=>$request->student_id,
            'remark'=>$request->remark
        ]);

        return app(MarkAttendanceTask::class)->run($request->date, $request->status, $request->student_id, $request->remark);
    }
}
