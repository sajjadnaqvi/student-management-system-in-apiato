<?php

/**
 * @apiGroup           ClassRoom
 * @apiName            findClassRoomById
 *
 * @api                {GET} /v1/classroom/:id Endpoint title here..
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

Route::get('classroom/{id}', [Controller::class, 'findClassRoomById'])
    ->name('api_classroom_find_class_room_by_id')
    ->middleware(['auth:api']);

