<?php

namespace Sco\LaravelEasySms;

use Illuminate\Support\ServiceProvider;
use Overtrue\EasySms\EasySms;

class LaravelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/easysms.php' => config_path('easysms.php'),
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/easysms.php', 'easysms');

        $this->app->singleton(EasySms::class, function () {
            $easySms = new EasySms(config('easysms'));

            return $easySms;
        });

        $this->app->alias(EasySms::class, 'easysms');
    }
}
