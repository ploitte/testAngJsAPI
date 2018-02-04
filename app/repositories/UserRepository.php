<?php

namespace App\Repositories;


use App\User;

class UserRepository extends BaseRepository implements InterfaceRepository
{

    public function __construct(User $user)
    {
        $this->entity = $user;
    }

    

}
