<?php

namespace App\Providers;

use Laravel\Nova\Nova;
use Asad\Report\Report;
use Asad\Invoicer\Invoicer;
use Asad\Settings\Settings;
use Laravel\Nova\Cards\Help;
use App\Nova\Metrics\NewOrders;
use App\Nova\Metrics\UserCount;
use App\Nova\Metrics\ProductCount;
use Asad\ProductStyle\ProductStyle;
use Asad\SiteSettings\SiteSettings;
use Illuminate\Support\Facades\Gate;
use Infinety\MenuBuilder\MenuBuilder;
use Laravel\Nova\NovaApplicationServiceProvider;


class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            
            new ProductCount,
            new UserCount,
            new NewOrders,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new \Infinety\Filemanager\FilemanagerTool(),
            new \ClassicO\NovaMediaLibrary\NovaMediaLibrary(),
            new Invoicer,
            new Settings,
            new ProductStyle,
            // new Report,
            new SiteSettings,
            // \Vyuldashev\NovaPermission\NovaPermissionTool::make(),
            new \Eminiarts\NovaPermissions\NovaPermissions(),
            new \Infinety\MenuBuilder\MenuBuilder(),
            // new \Coderello\LaravelNovaLang\LaravelNovaLangTool(),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Nova::style('nova-custom', public_path('css/nova.css'));
    }
}
