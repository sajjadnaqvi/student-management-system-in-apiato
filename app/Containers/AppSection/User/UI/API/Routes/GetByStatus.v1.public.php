<?php

/**
 * @apiGroup           User
 * @apiName            getByStatus
 *
 * @api                {GET} /v1/userstatus Endpoint title here..
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

use App\Containers\AppSection\User\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('userstatus', [Controller::class, 'getByStatus'])
    ->name('api_user_get_by_status')
    ->middleware(['auth:api']);

