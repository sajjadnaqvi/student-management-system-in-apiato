<?php

/**
 * @apiGroup           Exam
 * @apiName            findExamById
 *
 * @api                {GET} /v1/exams/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\AppSection\Exam\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('exams/{id}', [Controller::class, 'findExamById'])
    ->name('api_exam_find_exam_by_id')
    ->middleware(['auth:api']);

