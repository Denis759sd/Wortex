<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Phone;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        if (Schema::hasTable('phones')) {
            $phones = Phone::all();
            View::share([
                'phones' => $phones
            ]);
        }

        if (Schema::hasTable('categories')) {
            $categories = Category::all();

            View::share([
                'categories' => $categories,
            ]);
        }
    }
}
