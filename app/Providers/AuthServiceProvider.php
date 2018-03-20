<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Kitchen' => 'App\Policies\KitchenPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('object_create', function ($user) {
            $prive = $user->role->prives->where('name', 'creator_objects')->first();

            if ($prive){
                return true;
            }
            return false;
        });
        Gate::define('post_edit', function ($user) {
            $prive = $user->role->prives->where('name', 'editor_articles')->first();

            if ($prive){
                return true;
            }
            return false;
        });
        Gate::define('project_create', function ($user) {
            $prive = $user->role->prives->where('name', 'creator_projects')->first();

            if ($prive){
                return true;
            }
            return false;
        });
        Gate::define('project_edit', function ($user) {
            $prive = $user->role->prives->where('name', 'editor_projects')->first();

            if ($prive){
                return true;
            }
            return false;
        });
    }
}
