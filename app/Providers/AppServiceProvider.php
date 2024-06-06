<?php

namespace App\Providers;

use App\DTO\Factories\PetDtoFactory;
use App\Repositories\Eloquent\EloquentAdminRepository;
use App\Repositories\Eloquent\EloquentOrganizationRepository;
use App\Repositories\Eloquent\EloquentPetRepository;
use App\Repositories\Ibge\IBGEApiRespository;
use App\Services\AuthenticateService;
use App\Services\CreateOrganizationService;
use App\Services\CreatePetService;
use App\Services\GetCitiesServices;
use App\Services\GetOrganization;
use App\Services\GetStatesService;
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

        $this->app->bind(CreatePetService::class, function () {
            return new CreatePetService(new EloquentPetRepository(), new PetDtoFactory());
        });

        $this->app->bind(GetCitiesServices::class, function () {
            return new GetCitiesServices(new IBGEApiRespository());
        });

        $this->app->bind(GetStatesService::class, function () {
            return new GetStatesService(new IBGEApiRespository());
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
