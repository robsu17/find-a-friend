<?php

namespace App\Providers;

use App\Repositories\Eloquent\EloquentOrganizationRepository;
use App\Services\CreateOrganizationService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CreateOrganizationService::class, function () {
            return new CreateOrganizationService(new EloquentOrganizationRepository());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
