<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;



class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // Model::class => Policy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
{
    $this->registerPolicies();

    Gate::define('admin', function (User $user) {
        return $user->isAdmin();
    });
}
}
