<?php

/**
 * @apiGroup           Post
 * @apiName            createPost
 *
 * @api                {POST} /v1/posts Endpoint title here..
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

Route::post('posts', [Controller::class, 'createPost'])
    ->name('api_post_create_post')
    ->middleware(['auth:api']);

