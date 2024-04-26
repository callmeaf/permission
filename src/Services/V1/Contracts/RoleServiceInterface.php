<?php

namespace Callmeaf\Permission\Services\V1\Contracts;

use Callmeaf\Base\Services\V1\Contracts\BaseServiceInterface;
use Callmeaf\Permission\Models\Permission;
use Callmeaf\Permission\Services\V1\RoleService;

interface RoleServiceInterface extends BaseServiceInterface
{
    public function syncPermissions(null|string|int|iterable|Permission $permissions = []): RoleService;
}
