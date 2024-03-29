<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //  'App\Product' => 'App\Policies\ProductPolicy',
        //  'App\User' => 'App\Policies\UserPolicy',
        //  'App\Order' => 'App\Policies\OrderPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function ($user, $ability) {
            return $user->level == 1 ? true : null;
        });

        Gate::after(function ($user, $ability) {
          return $user->level == 1; // note this returns boolean
        });
    }
}
