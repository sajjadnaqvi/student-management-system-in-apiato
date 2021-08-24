<?php

/**
 * @apiGroup           ClassRoom
 * @apiName            getAllClassRooms
 *
 * @api                {GET} /v1/classroom Endpoint title here..
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

Route::get('classroom', [Controller::class, 'getAllClassRooms'])
    ->name('api_classroom_get_all_class_rooms')
    ->middleware(['auth:api']);

