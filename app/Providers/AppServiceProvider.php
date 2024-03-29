<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('admin/components/card', 'card');
        Blade::component('admin/components/alert', 'alert');
        Blade::component('admin/components/info-page', 'infopage');
        Blade::component('admin/components/info-meta', 'infometa');
    }
}
