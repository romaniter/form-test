<?php

namespace App\Providers;

use App\Helpers\FormInterface;
use App\Helpers\SaveEloquentORM;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Helpers\FormInterface', function() {

            return new SaveEloquentORM();

        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
