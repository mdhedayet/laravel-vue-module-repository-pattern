<?php

namespace Modules\Admin\app\Eloquent\Repositories;
use Modules\Admin\app\Eloquent\Interfaces\AdminRepositoryInterface;
use Modules\Admin\app\Models\Admin;

class AdminRepository implements AdminRepositoryInterface
{

    public function getAllAdmins() 
    {
        return Admin::all();
    }
}