<?php

namespace Modules\Admin\app\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\Admin\app\Eloquent\Interfaces\AdminRepositoryInterface;
use Modules\Admin\app\Eloquent\Repositories\AdminRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->app->bind(AdminRepositoryInterface::class, AdminRepository::class);
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
