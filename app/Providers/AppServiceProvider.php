<?php

namespace App\Providers;

use App\Repositories\Eloquent\EloquentAdminRepository;
use App\Repositories\Eloquent\EloquentOrganizationRepository;
use App\Services\AuthenticateService;
use App\Services\CreateOrganizationService;
use App\Services\GetOrganization;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CreateOrganizationService::class, function () {
            return new CreateOrganizationService(new EloquentOrganizationRepository(), new EloquentAdminRepository());
        });

        $this->app->bind(AuthenticateService::class, function () {
            return new AuthenticateService(new EloquentAdminRepository());
        });

        $this->app->bind(GetOrganization::class, function () {
            return new GetOrganization(new EloquentOrganizationRepository());
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
