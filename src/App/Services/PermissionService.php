<?php

namespace Callmeaf\Permission\App\Services;

use Callmeaf\Permission\App\Repo\Contracts\PermissionRepoInterface;

class PermissionService
{
    public function permissionsOfPackages(): array
    {
        $packagesNames = array_keys(\Base::getAllPackagesConfig());

        $permissions = [];
        foreach ($packagesNames as $packagesName) {
            foreach ($this->permissionCycles() as $cycle) {
                $permissions[$packagesName][] = $cycle->value;
            }
        }

        return $permissions;
    }

    public function permissionCycles(): array
    {
        /**
         * @var PermissionRepoInterface $permissionRepo
         */
        $permissionRepo = app(PermissionRepoInterface::class);
        $config = $permissionRepo->config;
        return $config['enums']['cycle']::cases();
    }
}
