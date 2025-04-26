<?php

namespace Callmeaf\Permission\App\Services;

use App\Models\User;
use Callmeaf\Base\App\Repo\Contracts\CoreRepoInterface;
use Callmeaf\Permission\App\Enums\PermissionCycle;
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

    /**
     * @param string|PermissionCycle $permissionName
     * @param ?string $repo
     * @param ?User $user
     * @return bool
     */
    public function userCan($permissionName,?string $repo = null,$user = null): bool
    {
        $user ??= request()->user();
        if(is_string($permissionName)) {
            return $user->can($permissionName);
        }
        /**
         * @var CoreRepoInterface $repo
         */
        $repo = app($repo);
        $packageName = \Base::getPackageNameFromModel(model: $repo->getModel()::class);
        $packageName = str($packageName)->kebab()->toString();
        $permissionName = $permissionName->value;

        return $user->can("{$packageName}_{$permissionName}");
    }
}
