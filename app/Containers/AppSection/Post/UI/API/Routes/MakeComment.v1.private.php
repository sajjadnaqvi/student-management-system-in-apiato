<?php

/**
 * @apiGroup           Post
 * @apiName            makeComment
 *
 * @api                {POST} /v1/comment Endpoint title here..
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

use App\Containers\AppSection\Post\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('comment', [Controller::class, 'makeComment'])
    ->name('api_post_make_comment')
    ->middleware(['auth:api']);

