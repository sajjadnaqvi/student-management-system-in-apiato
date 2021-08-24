<?php

/**
 * @apiGroup           ClassRoom
 * @apiName            assignClassToStudent
 *
 * @api                {POST} /v1/class/student Endpoint title here..
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

Route::post('class/student', [Controller::class, 'assignClassToStudent'])
    ->name('api_classroom_assign_class_to_student')
    ->middleware(['auth:api']);

