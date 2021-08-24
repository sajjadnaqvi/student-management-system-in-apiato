<?php

/**
 * @apiGroup           ClassRoom
 * @apiName            assignTeacherToClass
 *
 * @api                {PATCH} /v1/class/teacher/:id Endpoint title here..
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

use App\Containers\AppSection\ClassRoom\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('class/teacher/{id}', [Controller::class, 'assignTeacherToClass'])
    ->name('api_classroom_assign_teacher_to_class')
    ->middleware(['auth:api']);

