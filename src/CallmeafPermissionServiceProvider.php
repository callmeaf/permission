<?php

namespace Callmeaf\Permission;

use Callmeaf\User\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class CallmeafPermissionServiceProvider extends ServiceProvider
{
    private const CONFIGS_DIR = __DIR__ . '/../config';
    private const CONFIGS_KEY = 'callmeaf-permission';
    private const CONFIG_GROUP = 'callmeaf-permission-config';
    private const ROLE_CONFIGS_DIR = __DIR__ . '/../config';
    private const ROLE_CONFIGS_KEY = 'callmeaf-role';
    private const ROLE_CONFIG_GROUP = 'callmeaf-role-config';

    private const ROUTES_DIR = __DIR__ . '/../routes';
    private const DATABASE_DIR = __DIR__ . '/../database';
    private const DATABASE_GROUPS = 'callmeaf-user-migrations';
    private const RESOURCES_DIR = __DIR__ . '/../resources';
    private const VIEWS_NAMESPACE = 'callmeaf-permission';
    private const VIEWS_GROUP = 'callmeaf-permission-views';

    private const LANG_DIR = __DIR__ . '/../lang';
    private const LANG_NAMESPACE = 'callmeaf-permission';
    private const LANG_GROUP = 'callmeaf-permission-lang';

    public function boot(): void
    {
        $this->registerConfig();
        $this->registerRoute();
        $this->registerMigration();
        $this->registerEvents();
        $this->registerViews();
        $this->registerLang();
        $this->registerSeeders();
        $this->registerGates();
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(self::CONFIGS_DIR . '/callmeaf-permission.php',self::CONFIGS_KEY);
        $this->publishes([
            self::CONFIGS_DIR . '/callmeaf-permission.php' => config_path('callmeaf-permission.php'),
        ],self::CONFIG_GROUP);

        $this->mergeConfigFrom(self::ROLE_CONFIGS_DIR . '/callmeaf-role.php',self::ROLE_CONFIGS_KEY);
        $this->publishes([
            self::ROLE_CONFIGS_DIR . '/callmeaf-role.php' => config_path('callmeaf-role.php'),
        ],self::ROLE_CONFIG_GROUP);
    }

    private function registerRoute(): void
    {
        $this->loadRoutesFrom(self::ROUTES_DIR . '/v1/api.php');
    }

    private function registerMigration(): void
    {
        $this->loadMigrationsFrom(self::DATABASE_DIR . '/migrations');
        $this->publishes([
            self::DATABASE_DIR . '/migrations' => database_path('migrations'),
        ],self::DATABASE_GROUPS);
    }

    private function registerEvents(): void
    {
        foreach (config('callmeaf-permission.events') as $event => $listeners) {
            Event::listen($event,function($event) use ($listeners) {
                foreach($listeners as $listener) {
                    app($listener)->handle($event);
                }
            });
        }

        foreach (config('callmeaf-role.events') as $event => $listeners) {
            Event::listen($event,function($event) use ($listeners) {
                foreach($listeners as $listener) {
                    app($listener)->handle($event);
                }
            });
        }
    }

    private function registerViews(): void
    {
        $this->loadViewsFrom(self::RESOURCES_DIR . '/views',self::VIEWS_NAMESPACE);
        $this->publishes([
            self::RESOURCES_DIR . '/views' => resource_path('views/vendor/callmeaf-permission'),
        ],self::VIEWS_GROUP);

    }

    private function registerLang(): void
    {
        $langPathFromVendor = lang_path('vendor/callmeaf/permission');
        if(is_dir($langPathFromVendor)) {
            $this->loadTranslationsFrom($langPathFromVendor,self::LANG_NAMESPACE);
        } else {
            $this->loadTranslationsFrom(self::LANG_DIR,self::LANG_NAMESPACE);
        }
        $this->publishes([
            self::LANG_DIR => $langPathFromVendor,
        ],self::LANG_GROUP);
    }

    private function registerSeeders(): void
    {
        $this->callAfterResolving(DatabaseSeeder::class,function ($seeder) {
            $seeder->callOnce(config('callmeaf-permission.seeders'));
            $seeder->callOnce(config('callmeaf-role.seeders'));
        });
    }

    private function registerGates(): void
    {
        // Implicitly grant "Super Admin" role all permissions
        // This works in the app by using gate-related functions like auth()->user->can() and @can()
        Gate::before(function (User $user, $ability) {
            return $user->isSuperAdmin() ? true : null;
        });
    }
}
