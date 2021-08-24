<?php

/**
 * @apiGroup           Post
 * @apiName            findPostById
 *
 * @api                {GET} /v1/posts/:id Endpoint title here..
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

Route::get('posts/{id}', [Controller::class, 'findPostById'])
    ->name('api_post_find_post_by_id')
    ->middleware(['auth:api']);

