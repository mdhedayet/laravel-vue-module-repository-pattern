<?php

namespace Modules\Test\app\Eloquent\Repositories;
use Modules\Test\app\Eloquent\Interfaces\TestRepositoryInterface;
use Modules\Test\app\Models\Test;

class TestRepository implements TestRepositoryInterface
{

    public function getAllTests() 
    {
        return Test::all();
    }
}