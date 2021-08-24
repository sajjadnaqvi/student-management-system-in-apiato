<?php

namespace App\Containers\AppSection\Post\UI\API\Controllers;

use App\Containers\AppSection\Post\UI\API\Requests\CreatePostRequest;
use App\Containers\AppSection\Post\UI\API\Requests\DeletePostRequest;
use App\Containers\AppSection\Post\UI\API\Requests\GetAllPostsRequest;
use App\Containers\AppSection\Post\UI\API\Requests\FindPostByIdRequest;
use App\Containers\AppSection\Post\UI\API\Requests\UpdatePostRequest;
use App\Containers\AppSection\Post\UI\API\Requests\MakeCommentRequest;
use App\Containers\AppSection\Post\UI\API\Transformers\PostTransformer;
use App\Containers\AppSection\Post\UI\API\Transformers\CommentTransformer;
use App\Containers\AppSection\Post\Actions\CreatePostAction;
use App\Containers\AppSection\Post\Actions\MakeCommentAction;
use App\Containers\AppSection\Post\Actions\FindPostByIdAction;
use App\Containers\AppSection\Post\Actions\GetAllPostsAction;
use App\Containers\AppSection\Post\Actions\UpdatePostAction;
use App\Containers\AppSection\Post\Actions\DeletePostAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createPost(CreatePostRequest $request): JsonResponse
    {
        $post = app(CreatePostAction::class)->run($request);
        return $this->created($this->transform($post, PostTransformer::class));
    }
    public function makeComment(MakeCommentRequest $request): JsonResponse
    {
        $post = app(MakeCommentAction::class)->run($request);
        return $this->created($this->transform($post, CommentTransformer::class));
    }

    public function findPostById(FindPostByIdRequest $request): array
    {
        $post = app(FindPostByIdAction::class)->run($request);
        return $this->transform($post, PostTransformer::class);
    }

    public function getAllPosts(GetAllPostsRequest $request): array
    {
        $posts = app(GetAllPostsAction::class)->run($request);
        return $this->transform($posts, PostTransformer::class);
    }

    public function updatePost(UpdatePostRequest $request): array
    {
        $post = app(UpdatePostAction::class)->run($request);
        return $this->transform($post, PostTransformer::class);
    }

    public function deletePost(DeletePostRequest $request): JsonResponse
    {
        app(DeletePostAction::class)->run($request);
        return $this->noContent();
    }
}
