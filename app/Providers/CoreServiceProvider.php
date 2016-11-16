<?php

namespace App\Providers;

use App\Repositories\MessageRepository;
use Common\Services\CrudService;
use Common\Services\ICrudService;
use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ICrudService::class, function ($app) {
            return new CrudService(new MessageRepository());
        });
    }
}
