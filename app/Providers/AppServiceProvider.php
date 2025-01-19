<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\PersonasRepository;
use App\Repositories\PersonasRepositoryInterface;
use App\Services\PersonasService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PersonasRepositoryInterface::class, PersonasRepository::class);

        $this->app->bind(PersonasService::class, function ($app) {
            return new PersonasService($app->make(PersonasRepositoryInterface::class));
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
