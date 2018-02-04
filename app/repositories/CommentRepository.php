<?php

namespace App\Repositories;


use App\Comment;

class CommentRepository extends BaseRepository implements InterfaceRepository
{

    public function __construct(Comment $comment)
    {
        $this->entity = $comment;
    }

    

}