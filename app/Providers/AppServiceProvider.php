<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Cashier\Cashier;

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
        Cashier::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
	//
	if (request()->isSecure()) {
=======
        //
        if (request()->isSecure()) {
>>>>>>> 727eda3449f44cf8585a068fd395529b5f65bfca
            \URL::forceScheme('https');
        }
    }
}
