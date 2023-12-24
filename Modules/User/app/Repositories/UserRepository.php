<?php

namespace Modules\User\app\Repositories;

use Modules\User\app\Interfaces\UserRepositoryInterface;
use Modules\User\app\Models\User;

class UserRepository implements UserRepositoryInterface
{

    public function getAllUsers() 
    {
        return User::all();
    }
}