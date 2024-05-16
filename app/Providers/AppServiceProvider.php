<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
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
        Gate::define("viewDashboard",function (User $user)
        {
           if($user->role == "admin" || $user->role == "editor") {
            return Response::allow();
           }
            return  Response::deny("you must admin or editor to see");
           
        });

        Gate::define("viewManagementUser", function (User $user)
        {
            return $user->role == 'admin'; 
        });

         Gate::define("managementProduct",function (User $user)
        {
           if($user->role == "admin" || $user->role == "editor") {
            return Response::allow();
           }
            return  Response::denyAsNotFound();
           
        });

    }
}
