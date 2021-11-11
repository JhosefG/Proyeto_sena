<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('administrador',function($user){
            return $user->hasrol('Administrador');
        });

        Gate::define('usuario',function($user){
            return $user->hasrol('Usuario');
        });

        Gate::define('todos',function($user){
            return $user->hasAnyrol('Usuario,Administrador');
        });
        
    }
}

