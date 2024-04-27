<?php

namespace Callmeaf\Permission\Seeders;

use Callmeaf\Permission\Enums\RoleName;
use Callmeaf\Permission\Models\Role;
use Callmeaf\Permission\Services\V1\PermissionService;
use Callmeaf\Permission\Services\V1\RoleService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class RoleSeeder extends Seeder
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
        $permissions = $permissionService->all(columns: ['id','name'])->getCollection();
        /**
         * @var RoleService $roleService
         */
        $roleService = app(config('callmeaf-role.service'));
        /**
         * @var Role $roleModel
         */
        $roleModel = app(config('callmeaf-role.model'));
        /**
         * @var RoleName $roleNames,
         */
        $roleNames = config('callmeaf-role.enums.names');
        foreach ($roleNames::cases() as $roleNameCase) {
            $roleService->freshQuery()->create([
                'name' => $roleNameCase->value,
                'name_fa' => enumTranslator(enumCase: $roleNameCase,languages: $roleModel::enumsLang())
            ])->syncPermissions(permissions: $permissions->filter(fn($permission) => in_array($permission->name,config('callmeaf-role.permissions')[$roleNameCase->name]))->values()->pluck('id'));
        }
    }
}
