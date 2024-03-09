<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;

use App\Models\MainMenu;
use App\Models\ProductCategories;

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
        //
        $mainMenu = MainMenu::whereNull('parent_id')->orderBy('num')->get();
        $productMenu = ProductCategories::whereNull('parent_id')->orderBy('num')->get();

        View::share('MasterMainMenu', ['mainMenu' => $mainMenu, 'productMenu' => $productMenu]);
        
    }
}
