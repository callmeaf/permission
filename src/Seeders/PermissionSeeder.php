<?php

namespace Callmeaf\Permission\Seeders;

use Callmeaf\Permission\Enums\PermissionName;
use Callmeaf\Permission\Models\Permission;
use Callmeaf\Permission\Services\V1\PermissionService;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * @var PermissionService $permissionService
         */
        $permissionService = app(config('callmeaf-permission.service'));
        /**
         * @var Permission $permissionModel
         */
        $permissionModel = app(config('callmeaf-permission.model'));
        foreach (PermissionName::cases() as $permissionNameCase) {
            $permissionService->freshQuery()->create([
                'name' => $permissionNameCase->value,
            ]);
        }
    }
}
