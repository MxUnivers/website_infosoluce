<?php

namespace App\Providers;

use App\Models\User;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        $this->registerPolicies();
        //********************SuperAdmin*************************
        //Gestion de type 
        Gate::define("bureau", function (User $user) {
            return $user->user_type == 1;
        });
        Gate::define("SuperAdmin", function (User $user) {
            return $user->hasRole('SuperAdmin');
        });
        //********************Bureau*************************
        Gate::define("Administrateur", function (User $user) {
            return $user->hasRole("Administrateur");
        });
        Gate::define("Comptabilite", function (User $user) {
            return $user->hasRole("Comptabilite");
        });
        Gate::define("Gestionnaire", function (User $user) {
            return $user->hasRole("Gestionnaire");
        });

        //********************Partener*************************
        //Gestion de type 
        Gate::define("partener", function (User $user) {
            return $user->user_type == 3;
        });
        Gate::define("Admin", function (User $user) {
            return $user->hasRole("Admin");
        });
        Gate::define("Manager", function (User $user) {
            return $user->hasRole("Manager");
        });
        Gate::define("Comptable", function (User $user) {
            return $user->hasRole("Comptable");
        });

        //********************Client*************************
        //Gestion de type 
        Gate::define("client", function (User $user) {
            return $user->user_type == 2 && $user->hasRole("Client");
        });
        //gestion de role
        Gate::define("Client", function (User $user) {
            return $user->hasRole("Client");
        });
    }
}
