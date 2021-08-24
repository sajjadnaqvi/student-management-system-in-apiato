<?php

namespace App\Containers\AppSection\Post\UI\API\Transformers;

use App\Containers\AppSection\Post\Models\Comment;
use App\Ship\Parents\Transformers\Transformer;

class CommentTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    public function transform(Comment $comment): array
    {
        $response = [
            'object' => $comment->getResourceKey(),
            'id' => $comment->getHashedKey(),
            'body'=>$comment->body,
            'post'=>$comment->commentable,
            'created_at' => $comment->created_at,
            'updated_at' => $comment->updated_at,
            'readable_created_at' => $comment->created_at->diffForHumans(),
            'readable_updated_at' => $comment->updated_at->diffForHumans(),

        ];

        $response = $this->ifAdmin([
            'real_id'    => $comment->id,
            // 'deleted_at' => $comment->deleted_at,
        ], $response);

        return $response;
    }
}
