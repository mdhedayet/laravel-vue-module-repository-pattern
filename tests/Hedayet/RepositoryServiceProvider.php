<?php

namespace Modules\Test\app\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Test\app\Eloquent\Interfaces\TestRepositoryInterface;
use Modules\Test\app\Eloquent\Repositories\TestRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->app->bind(TestRepositoryInterface::class, TestRepository::class);
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
