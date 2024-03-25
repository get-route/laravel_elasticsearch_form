<?php

namespace App\Providers;

use App\Repositories\EloquentSearchRepository;
use App\Repositories\Interfaces\SearchRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(EloquentSearchRepository::class);
    }
}
