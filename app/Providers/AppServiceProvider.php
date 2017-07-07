<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $extensions = [
            'blade.js' => 'blade',
            'blade.css' => 'blade',
        ];
        foreach ($extensions as $e => $i) {
            View::addExtension($e, $i);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
