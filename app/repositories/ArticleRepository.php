<?php

namespace App\Repositories;


use App\Article;

class ArticleRepository extends BaseRepository implements InterfaceRepository
{

    public function __construct(Article $article)
    {
        $this->entity = $article;
    }

    

}
