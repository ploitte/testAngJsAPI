<?php

namespace App\Http\Controllers\Api\Auth;

use App\repositories\UserRepository;
use Dingo\Api\Routing\Helpers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{

    private $userRepo; 

    public function __construct(UserRepository $userRepo){
        $this->userRepo = $userRepo;
    }

    public function login(Request $request){
        
    }
}
