<?php

namespace Modules\User\app\Eloquent\Repositories;
use Modules\User\app\Eloquent\Interfaces\UserRepositoryInterface;
use Modules\User\app\Models\User;

class UserRepository implements UserRepositoryInterface
{

    public function getAllUsers() 
    {
        return User::all();
    }
}