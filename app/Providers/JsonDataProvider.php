<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;


class JsonDataProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $jsonPath = public_path('storage/homePage.json');

        if (File::exists($jsonPath)) {
            $jsonData = file_get_contents($jsonPath);
            $homeData = json_decode($jsonData, true);

            View::share('homeData', $homeData);
        }
    }
}
