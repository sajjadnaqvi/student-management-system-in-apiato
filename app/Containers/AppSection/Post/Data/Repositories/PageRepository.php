<?php

namespace App\Containers\AppSection\Post\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class PageRepository extends Repository
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
        return config('post.models.page');
    }
}
