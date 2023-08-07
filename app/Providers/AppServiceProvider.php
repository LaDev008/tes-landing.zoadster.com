<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\SeoPage;
use App\Models\Navigation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('layouts.mainlayout', function ($view) {
            $view->with('page', Page::find(1));
        });

        view()->composer('layouts.articlelayout', function ($view) {
            $view->with(['page' => Page::find(1),  'navigation' => Navigation::with('seoPages')->where('route_name', Route::current()->getName())->first()]);
        });

        Paginator::useBootstrapFive();
    }
}
