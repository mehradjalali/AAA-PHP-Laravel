<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::rename('user_to_role', 'RoleUser');
        Schema::rename('role_to_permission', 'PermissionRole');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::rename('RoleUser', 'user_to_role');
        Schema::rename('PermissionRole', 'role_to_permission');
    }
};