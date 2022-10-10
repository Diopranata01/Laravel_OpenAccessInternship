<?php

namespace App\Providers;

use App\Repository\IMahasiswaRepository;
use App\Repository\MahasiswaRepositoruy;
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
        $this->app->bind(IMahasiswaRepository::class, MahasiswaRepository::class);
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
