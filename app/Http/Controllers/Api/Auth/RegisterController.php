<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\repositories\UserRepository;

class RegisterController extends Controller
{

    use RegistersUsers;
    use Helpers;

    private $userRepo;

    public function __construct(UserRepository $userRepo){
        $this->userRepo = $userRepo;
    }

    public function register(Request $request){

        $validator = $this->validator($request->all());

        if($validator->fails()){
            $errors = $validator->errors()->all();

            return $this->response->array([
                "message" => "error",
                "errors" => $errors
            ]);
        }

        // Creation user
        $user = $this->userRepo->create(array(
            "name" => $request["name"],
            "email" => $request["email"],
            "password" => bcrypt($request["password"])
        ));

        if($user){
            $token = JWTAuth::fromUser($user);

            return $this->response->array([
                "token" => $token,
                "message" => "success",
                "currentUser" => $user
            ]);
        }else{
            return $this->reponse->error("User not found");
        }

    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);
    }
}
