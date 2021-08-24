<?php

/**
 * @apiGroup           Exam
 * @apiName            updateExam
 *
 * @api                {PATCH} /v1/exams/:id Endpoint title here..
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

Route::patch('exams/{id}', [Controller::class, 'updateExam'])
    ->name('api_exam_update_exam')
    ->middleware(['auth:api']);

