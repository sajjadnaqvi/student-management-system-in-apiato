<?php

namespace App\Containers\AppSection\Exam\UI\API\Controllers;

use App\Containers\AppSection\Exam\UI\API\Requests\CreateExamRequest;
use App\Containers\AppSection\Exam\UI\API\Requests\CreateExamResultRequest;
use App\Containers\AppSection\Exam\UI\API\Requests\DeleteExamRequest;
use App\Containers\AppSection\Exam\UI\API\Requests\GetAllExamsRequest;
use App\Containers\AppSection\Exam\UI\API\Requests\FindExamByIdRequest;
use App\Containers\AppSection\Exam\UI\API\Requests\UpdateExamRequest;
use App\Containers\AppSection\Exam\UI\API\Requests\FindResultByStudentIdRequest;
use App\Containers\AppSection\Exam\UI\API\Transformers\ExamTransformer;
use App\Containers\AppSection\Exam\UI\API\Transformers\ExamResultTransformer;
use App\Containers\AppSection\Exam\Actions\CreateExamAction;
use App\Containers\AppSection\Exam\Actions\CreateExamResultAction;
use App\Containers\AppSection\Exam\Actions\FindExamByIdAction;
use App\Containers\AppSection\Exam\Actions\FindResultByStudentIdAction;
use App\Containers\AppSection\Exam\Actions\GetAllExamsAction;
use App\Containers\AppSection\Exam\Actions\UpdateExamAction;
use App\Containers\AppSection\Exam\Actions\DeleteExamAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createExam(CreateExamRequest $request): JsonResponse
    {
        $exam = app(CreateExamAction::class)->run($request);
        return $this->created($this->transform($exam, ExamTransformer::class));
    }

    public function createExamResult(CreateExamResultRequest $request): JsonResponse
    {
        $exam = app(CreateExamResultAction::class)->run($request);
        return $this->created($this->transform($exam, ExamResultTransformer::class));
    }

    public function findExamById(FindExamByIdRequest $request): array
    {
        $exam = app(FindExamByIdAction::class)->run($request);
        return $this->transform($exam, ExamTransformer::class);
    }
    public function findResultByStudentId(FindResultByStudentIdRequest $request): array
    {
        $exam = app(FindResultByStudentIdAction::class)->run($request);
        return $this->transform($exam, ExamResultTransformer::class);
    }

    public function getAllExams(GetAllExamsRequest $request): array
    {
        $exams = app(GetAllExamsAction::class)->run($request);
        return $this->transform($exams, ExamTransformer::class);
    }

    public function updateExam(UpdateExamRequest $request): array
    {
        $exam = app(UpdateExamAction::class)->run($request);
        return $this->transform($exam, ExamTransformer::class);
    }

    public function deleteExam(DeleteExamRequest $request): JsonResponse
    {
        app(DeleteExamAction::class)->run($request);
        return $this->noContent();
    }
}
