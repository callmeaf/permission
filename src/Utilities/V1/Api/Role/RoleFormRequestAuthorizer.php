<?php

namespace Callmeaf\Permission\Utilities\V1\Api\Role;

use Callmeaf\Base\Utilities\V1\FormRequestAuthorizer;
use Callmeaf\Permission\Enums\PermissionName;

class RoleFormRequestAuthorizer extends FormRequestAuthorizer
{
    public function index(): bool
    {
        return userCan(PermissionName::ROLE_INDEX);
    }

    public function create(): bool
    {
        return userCan(PermissionName::ROLE_STORE);
    }

    public function store(): bool
    {
        return userCan(PermissionName::ROLE_STORE);
    }

    public function show(): bool
    {
        return userCan(PermissionName::ROLE_SHOW);
    }

    public function edit(): bool
    {
        return userCan(PermissionName::ROLE_UPDATE);
    }

    public function update(): bool
    {
        return userCan(PermissionName::ROLE_UPDATE);
    }

    public function statusUpdate(): bool
    {
        return userCan(PermissionName::ROLE_UPDATE);
    }

    public function destroy(): bool
    {
        return userCan(PermissionName::ROLE_DESTROY);
    }

    public function syncPermissions(): bool
    {
        return userCan(PermissionName::ROLE_UPDATE);
    }
}
