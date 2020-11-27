<?php

namespace App\Providers;

use App\Bitrix24Provider;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootBitrix24Socialite();
    }

    protected function bootBitrix24Socialite()
    {
        $socialite = $this->app->make(\Laravel\Socialite\Contracts\Factory::class);
        $socialite->extend('bitrix24', function ($app) use ($socialite) {
           $config = $app['config']['services.bitrix24'];
           return $socialite->buildProvider(Bitrix24Provider::class, $config);
        });
    }
}
