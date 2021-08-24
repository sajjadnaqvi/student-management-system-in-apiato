<?php

namespace App\Containers\AppSection\Post\UI\API\Transformers;

use App\Containers\AppSection\Post\Models\Post;
use App\Ship\Parents\Transformers\Transformer;

class PostTransformer extends Transformer
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

    public function transform(Post $post): array
    {
        $response = [
            'object' => $post->getResourceKey(),
            'id' => $post->getHashedKey(),
            'title'=>$post->title,
            'content'=>$post->content,
            'comments'=>$post->comments,
            'created_at' => $post->created_at,
            'updated_at' => $post->updated_at,
           // 'readable_created_at' => $post->created_at->diffForHumans(),
            //'readable_updated_at' => $post->updated_at->diffForHumans(),

        ];

        $response = $this->ifAdmin([
            'real_id'    => $post->id,
            // 'deleted_at' => $post->deleted_at,
        ], $response);

        return $response;
    }
}
