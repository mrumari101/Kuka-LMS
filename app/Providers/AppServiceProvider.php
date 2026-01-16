<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\DisciplineRepository;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use App\Repositories\Interfaces\DisciplineRepositoryInterface;
use App\Repositories\Interfaces\LevelRepositoryInterface;
use App\Repositories\LevelRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(DisciplineRepositoryInterface::class, DisciplineRepository::class);
        $this->app->bind(LevelRepositoryInterface::class, LevelRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}
