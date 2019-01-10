<?php

namespace App\Providers;

use App\Role;
use App\User;
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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: User actions
        Gate::define('user_action_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Product management
        Gate::define('product_management_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Products
        Gate::define('product_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('product_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('product_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Product categories
        Gate::define('product_category_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_category_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('product_category_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('product_category_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('product_category_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Product tags
        Gate::define('product_tag_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_tag_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('product_tag_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('product_tag_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('product_tag_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Type
        Gate::define('type_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('type_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('type_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('type_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('type_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Comment
        Gate::define('comment_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('comment_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('comment_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('comment_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('comment_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Like
        Gate::define('like_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('like_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('like_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('like_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('like_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Download
        Gate::define('download_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('download_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('download_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('download_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('download_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Order
        Gate::define('order_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('order_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('order_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('order_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('order_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

    }
}
