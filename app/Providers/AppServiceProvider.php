<?php

namespace App\Providers;

use App\Repository\EloquentMahasiswaRepository;
use App\Repository\MahasiswaRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MahasiswaRepository::class, EloquentMahasiswaRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
