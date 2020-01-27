<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        \Shippo::setApiKey(env('SHIPPO_API_KEY'));
        
  //       $this->app->bind('path.public', function() {
		// 	return base_path() . '/../public_html';
		// });
        
    }
}
