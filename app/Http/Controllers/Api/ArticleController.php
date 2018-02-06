<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepository;
use App\Repositories\CommentRepository;
use App\Article;
use App\User;


class ArticleController extends Controller
{

    private $articleRepo;
    private $commentRepo;

    public function __construct(ArticleRepository $articleRepo, CommentRepository $commentRepo){
        $this->articleRepo = $articleRepo;
        $this->commentRepo = $commentRepo;
    }


    public function getAllArticle(){
        // $articles = $this->articleRepo->getAll();
        // $comments = $this->commentRepo->getAll();


        

        return $comment;

    }




}
