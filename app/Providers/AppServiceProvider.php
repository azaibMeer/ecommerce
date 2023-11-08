<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use App\Models\Category;

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
        $setting = Setting::where('status', 1)->first();
        $header_categories = Category::where('show_on_header', 1 )->where('status', 1)
        ->orderBy('id', 'desc')->take(4)->get();
        view()->share(['setting' => $setting, 'header_categories' => $header_categories]);
    }
}
