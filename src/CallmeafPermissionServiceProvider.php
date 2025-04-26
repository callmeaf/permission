<?php

namespace Callmeaf\Permission;

use Callmeaf\Base\CallmeafServiceProvider;
use Callmeaf\Base\Contracts\ServiceProvider\HasConfig;
use Callmeaf\Base\Contracts\ServiceProvider\HasEvent;
use Callmeaf\Base\Contracts\ServiceProvider\HasFacade;
use Callmeaf\Base\Contracts\ServiceProvider\HasLang;
use Callmeaf\Base\Contracts\ServiceProvider\HasMigration;
use Callmeaf\Base\Contracts\ServiceProvider\HasRepo;
use Callmeaf\Base\Contracts\ServiceProvider\HasRoute;
use Callmeaf\Base\Contracts\ServiceProvider\HasSeeder;
use Callmeaf\Permission\App\Repo\Contracts\PermissionRepoInterface;
use Callmeaf\Permission\App\Seeders\PermissionSeeder;

class CallmeafPermissionServiceProvider extends CallmeafServiceProvider implements HasRepo, HasEvent, HasRoute, HasMigration, HasConfig, HasLang,HasFacade,HasSeeder
{
    protected function serviceKey(): string
    {
        return 'permission';
    }

    public function repo(): string
    {
        return PermissionRepoInterface::class;
    }

    public function seeders(): array
    {
        return [
            PermissionSeeder::class,
        ];
    }
}
