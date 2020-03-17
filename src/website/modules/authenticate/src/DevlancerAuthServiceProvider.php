<?php

namespace Devlancer\Authenticate;

use Illuminate\Support\ServiceProvider;

class DevlancerAuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/authenticate.php', 'authenticate');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            // Config
            __DIR__.'/../config/authenticate.php' => config_path('authenticate.php'),
            // Views
            __DIR__.'/../resources/views' => resource_path('views/vendor/authenticate'),
            // Translations
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/authenticate'),
            // Assets
            __DIR__.'/../resources/js' => public_path('vendor/authenticate/js'),
            __DIR__.'/../resources/css' => public_path('vendor/authenticate/css'),
        ], 'authenticate');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'authenticate');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'authenticate');
    }
}
