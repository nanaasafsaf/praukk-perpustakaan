<?php

namespace App\Providers;

use App\Models\Books;
use App\Models\BooksCategories;
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
        view()->share('categories', BooksCategories::all());
    }
}
