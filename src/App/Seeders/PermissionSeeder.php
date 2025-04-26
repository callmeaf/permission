<?php

namespace Callmeaf\Permission\App\Seeders;

use Callmeaf\Permission\App\Repo\Contracts\PermissionRepoInterface;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * @var PermissionRepoInterface $permissionRepo
         */
        $permissionRepo = app(PermissionRepoInterface::class);

        foreach (\Perm::permissionsOfPackages() as $packageName => $permissions) {
            foreach ($permissions as $permission) {
                $permissionName = "{$packageName}_{$permission}";
                $permissionRepo->freshQuery()->create([
                    'name' => $permissionName,
                ]);
            }
        }
    }
}
