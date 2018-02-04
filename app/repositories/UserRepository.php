<?php

namespace App\Repositories;


use App\User;
use Illuminate\Support\Facades\DB;

class UserRepository extends BaseRepository implements InterfaceRepository
{

    public function __construct(User $user)
    {
        $this->entity = $user;
    }

    
    public function findUser(array $data){

        $user = $this->entity->where("name", "=", $data["usernameEmail"])->orWhere("email", "=", $data["usernameEmail"]);

        return $user->first();
    }


}
