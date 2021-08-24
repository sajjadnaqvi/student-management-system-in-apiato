<?php

namespace App\Containers\AppSection\ClassRoom\UI\API\Controllers;

use App\Containers\AppSection\ClassRoom\UI\API\Requests\CreateClassRoomRequest;
use App\Containers\AppSection\ClassRoom\UI\API\Requests\CreateGradeRequest;
use App\Containers\AppSection\ClassRoom\UI\API\Requests\CreateCourseRequest;
use App\Containers\AppSection\ClassRoom\UI\API\Requests\DeleteClassRoomRequest;
use App\Containers\AppSection\ClassRoom\UI\API\Requests\GetAllClassRoomsRequest;
use App\Containers\AppSection\ClassRoom\UI\API\Requests\FindClassRoomByIdRequest;
use App\Containers\AppSection\ClassRoom\UI\API\Requests\UpdateClassRoomRequest;
use App\Containers\AppSection\ClassRoom\UI\API\Requests\MarkAttendanceRequest;
use App\Containers\AppSection\ClassRoom\UI\API\Requests\AssignTeacherToClassRequest;
use App\Containers\AppSection\ClassRoom\UI\API\Requests\AssignClassToStudentRequest;
use App\Containers\AppSection\ClassRoom\UI\API\Transformers\ClassRoomTransformer;
use App\Containers\AppSection\ClassRoom\UI\API\Transformers\GradeTransFormer;
use App\Containers\AppSection\ClassRoom\UI\API\Transformers\CourseTransform;
use App\Containers\AppSection\ClassRoom\UI\API\Transformers\AttendanceTransformer;
use App\Containers\AppSection\ClassRoom\Actions\CreateClassRoomAction;
use App\Containers\AppSection\ClassRoom\Actions\CreateGradeAction;
use App\Containers\AppSection\ClassRoom\Actions\CreateCourseAction;
use App\Containers\AppSection\ClassRoom\Actions\AssignTeacherToClassAction;
use App\Containers\AppSection\ClassRoom\Actions\FindClassRoomByIdAction;
use App\Containers\AppSection\ClassRoom\Actions\GetAllClassRoomsAction;
use App\Containers\AppSection\ClassRoom\Actions\UpdateClassRoomAction;
use App\Containers\AppSection\ClassRoom\Actions\DeleteClassRoomAction;
use App\Containers\AppSection\ClassRoom\Actions\MarkAttendanceAction;
use App\Containers\AppSection\ClassRoom\Actions\AssignClassToStudentAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createClassRoom(CreateClassRoomRequest $request): JsonResponse
    {
        $classroom = app(CreateClassRoomAction::class)->run($request);
        return $this->created($this->transform($classroom, ClassRoomTransformer::class));
    }
    public function createGrade(CreateGradeRequest $request): JsonResponse
    {
        $classroom = app(CreateGradeAction::class)->run($request);
        return $this->created($this->transform($classroom, GradeTransFormer::class));
    }
    public function createCourse(CreateCourseRequest $request): JsonResponse
    {
        $classroom = app(CreateCourseAction::class)->run($request);
        return $this->created($this->transform($classroom, CourseTransform::class));
    }

    public function findClassRoomById(FindClassRoomByIdRequest $request): array
    {
        $classroom = app(FindClassRoomByIdAction::class)->run($request);
        return $this->transform($classroom, ClassRoomTransformer::class);
    }

    public function getAllClassRooms(GetAllClassRoomsRequest $request): array
    {
        $classrooms = app(GetAllClassRoomsAction::class)->run($request);
        return $this->transform($classrooms, ClassRoomTransformer::class);
    }

    public function updateClassRoom(UpdateClassRoomRequest $request): array
    {
        $classroom = app(UpdateClassRoomAction::class)->run($request);
        return $this->transform($classroom, ClassRoomTransformer::class);
    }

    public function assignTeacherToClass(AssignTeacherToClassRequest $request): array
    {
        $classroom = app(AssignTeacherToClassAction::class)->run($request);
        return $this->transform($classroom, ClassRoomTransformer::class);
    }

    public function assignClassToStudent(AssignClassToStudentRequest $request):array{
        $classroom = app(AssignClassToStudentAction::class)->run($request);
        return $this->transform($classroom, ClassRoomTransformer::class);
    }

    public function markAttendance(MarkAttendanceRequest $request):array{
        $classroom = app(MarkAttendanceAction::class)->run($request);
        return $this->transform($classroom, AttendanceTransformer::class);
    }  
    

    public function deleteClassRoom(DeleteClassRoomRequest $request): JsonResponse
    {
        app(DeleteClassRoomAction::class)->run($request);
        return $this->noContent();
    }
}
