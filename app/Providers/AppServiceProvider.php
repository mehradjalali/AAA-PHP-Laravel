<?php

namespace App\Providers;
use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\RoleUser;
use Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
        Gate::define('hasPermission', function ($permission) {
            $permission_id = Permission::where('permission_name', $permission)->value('permission_id');
            $roles = RoleUser::select('role_id')->where('user_id', Auth::user()->id)->get();
            $hasPermission = false;
            foreach ($roles as $role) {
                $result = PermissionRole::where([
                    ['permission_id', '=', $permission_id],
                    ['role_id', '=', $role->role_id],
                ])->count();
                if ($result > 0) {
                    $hasPermission = true;
                    break;
                }
            }
            return $hasPermission;
        });
    }
}