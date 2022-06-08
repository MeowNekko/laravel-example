<?php

namespace App\Providers;

use App\Models\MenuItem;
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
        $menuItems = MenuItem::where('active', true)->get();

        view()->share('menuItems', $menuItems);
    }
}
