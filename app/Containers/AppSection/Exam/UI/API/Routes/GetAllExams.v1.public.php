<?php

/**
 * @apiGroup           Exam
 * @apiName            getAllExams
 *
 * @api                {GET} /v1/exams Endpoint title here..
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

Route::get('exams', [Controller::class, 'getAllExams'])
    ->name('api_exam_get_all_exams')
    ->middleware(['auth:api']);

