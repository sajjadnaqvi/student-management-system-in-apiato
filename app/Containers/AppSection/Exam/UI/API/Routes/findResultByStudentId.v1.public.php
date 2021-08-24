<?php

/**
 * @apiGroup           Exam
 * @apiName            findResultByStudentId
 *
 * @api                {GET} /v1/result/:id Endpoint title here..
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

Route::get('result/{id}', [Controller::class, 'findResultByStudentId'])
    ->name('api_exam_find_result_by_student_id')
    ->middleware(['auth:api']);

