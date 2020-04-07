<?php
namespace App\Search;

use Search\Searchable;

class PostsSearch extends Searchable
{
    public function __construct()
    {
        $this->params = [
            'name' => [
                'type' => 'like'
            ],
        ];
    }
}
