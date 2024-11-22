<?php

use \Illuminate\Support\Facades\Route;

Route::prefix(config('callmeaf-base.api.prefix_url'))->as(config('callmeaf-base.api.prefix_route_name'))->middleware(config('callmeaf-base.api.middlewares'))->group(function() {
    // Roles
    Route::apiResource('roles',config('callmeaf-role.controllers.roles'));
    Route::prefix('roles')->as('roles.')->controller(config('callmeaf-role.controllers.roles'))->group(function() {
        Route::prefix('{role}')->group(function() {
            Route::patch('/permissions','syncPermissions')->name('permissions.sync');
        });
    });
    // Permissions
    Route::apiResource('permissions',config('callmeaf-permission.controllers.permissions'))->only(['index','show']);
});
