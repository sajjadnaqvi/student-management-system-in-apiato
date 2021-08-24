<?php

/**
 * @apiGroup           Exam
 * @apiName            deleteExam
 *
 * @api                {DELETE} /v1/exams/:id Endpoint title here..
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

Route::delete('exams/{id}', [Controller::class, 'deleteExam'])
    ->name('api_exam_delete_exam')
    ->middleware(['auth:api']);

