<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepository;
use App\Repositories\CommentRepository;


class ArticleController extends Controller
{

    private $articleRepo;
    private $commentRepo;

    public function __construct(ArticleRepository $articleRepo, CommentRepository $commentRepo){
        $this->articleRepo = $articleRepo;
        $this->commentRepo = $commentRepo;
    }


    public function getAllArticle(){
        $articles = $this->articleRepo->getAll();
        $comments = $this->commentRepo->getAll();

        $uno = [];
        $dos = [];

        $results = [$uno, [$dos]];

        foreach($articles as $article){

            foreach($comments as $comment){

                if($article->id == $comment->id_article){
                    array_push($uno, $article);
                    array_push($dos, $comment);
                }

            }
        
        }

        var_dump(json_encode($results));

        die();

        return $articles;
    }

    public function getComment(){
        $comments = $this->commentRepo->getAll();
        return $comments;
    }




}
