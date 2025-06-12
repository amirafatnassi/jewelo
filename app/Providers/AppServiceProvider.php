<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Color;
use App\Models\Metal;
use App\Models\Product;

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
        View::composer('*', function ($view) {
            $view->with('categories', Category::all());
        });

        View::composer('*', function ($view) {
            $view->with('colors', Color::all());
        });

        View::composer('*', function ($view) {
            $view->with('metals', Metal::all());
        });

        View::composer('*', function ($view) {
            $view->with('newProducts',  Product::where('created_at', '>=', now()->subDays(7))
                ->latest()
                ->take(10)
                ->get());
        });
    }
}
