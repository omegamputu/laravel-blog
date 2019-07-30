<?php

namespace App\Providers;

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
        //
        view()->composer('admin.components.header',
            \App\Http\ViewComposers\RecentPostsComposer::class);


        view()->composer('admin.components.header',
            \App\Http\ViewComposers\RecentCommentsComposer::class);

        view()->composer('admin.components.header',
            \App\Http\ViewComposers\RecentContactsComposer::class);
    }



}
