<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider
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
        $this->configurePermissions();
        // $this->configureRoutes();

        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    // protected function configureRoutes() 
    // {   
    //     Jetstream::routes(function () {
    //         Route::get('register', '\Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@create')
    //             ->middleware('admin')
    //             ->name('register');
    //     });
    // }


    /**
     * Configure the permissions that are available within the application.
     */
    protected function configurePermissions(): void
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
