<?php

namespace App\Containers\AppSection\Post\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class CommentRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
    public function model():string
    {
        return config('post.models.comment');
    }
}
