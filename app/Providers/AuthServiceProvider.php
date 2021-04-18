<?php

namespace App\Providers;

use http\Client\Curl\User;
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

        Gate::define('manage-users', function ($user){
            return $user->hasAnyRoles(['admin', 'author', 'manager']);
        });
        Gate::define('edit-users', function ($user){
            return $user->hasAnyRoles(['admin', 'author']);
        });
        Gate::define('delete-users', function ($user){
            return $user->hasRole('admin');
        });
        Gate::define('manage-hotels', function ($user){
            return $user->hasAnyRoles(['admin','author', 'manager']);
        });
        Gate::define('edit-hotels', function ($user){
            return $user->hasAnyRoles(['admin', 'author']);
        });
        Gate::define('delete-hotels', function ($user){
            return $user->hasRole('admin');
        });
        Gate::define('create-hotels', function ($user){
            return $user->hasAnyRoles(['admin', 'author']);
        });
        Gate::define('post-comment', function ($user){
           return $user->hasRole('user');
        });
        Gate::define('delete-comment', function ($user){
            return $user->hasRole('admin');
        });
    }
}
