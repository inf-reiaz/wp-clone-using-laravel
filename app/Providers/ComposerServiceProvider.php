<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\ComposerView\AutoLodeData;


class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend.partials.right_side_bar',AutoLodeData::class);
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
