<?php

use \Illuminate\Support\Facades\Route;

Route::prefix(config('callmeaf-base.api.prefix_url'))->as(config('callmeaf-base.api.prefix_route_name'))->middleware(config('callmeaf-base.api.middlewares'))->group(function() {
    Route::middleware(config('callmeaf-role.middlewares.global'))->group(function() {
        Route::apiResource('roles',config('callmeaf-role.controllers.roles'));
        Route::prefix('roles')->as('roles.')->controller(config('callmeaf-role.controllers.roles'))->group(function() {
            Route::prefix('{role}')->group(function() {
                Route::patch('/restore','restore')->name('restore');
                Route::delete('/force','forceDestroy')->name('force_destroy');
            });
            Route::get('/trashed/index','trashed')->name('trashed.index');
        });

    });
});
