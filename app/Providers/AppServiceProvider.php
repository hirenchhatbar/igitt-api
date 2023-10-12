<?php

namespace App\Providers;

use App\Http\Controllers\RoleController as AppRoleController;
use App\Models\Role as AppRole;
use App\Validators\RolePostValidator as AppRolePostValidator;
use Hiren\Igitt\Controllers\RoleController;
use Hiren\Igitt\Models\Role;
use Hiren\Igitt\Validators\RolePostValidator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        /**
         *********** Controllers ***********
         */
        RoleController::class => AppRoleController::class,
        /**
         *********** End controllers ***********
         */

        /**
         *********** Validators ***********
         */
        RolePostValidator::class => AppRolePostValidator::class,
        /**
         *********** End validators ***********
         */

        /**
         *********** Models ***********
         */
        Role::class => AppRole::class,
        /**
         *********** End models ***********
         */
    ];

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
    }
}
