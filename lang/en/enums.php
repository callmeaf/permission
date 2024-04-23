<?php

use Callmeaf\Permission\Enums\PermissionName;

return [
    PermissionName::class => [
        PermissionName::USER_INDEX->name => 'User Index',
        PermissionName::USER_STORE->name => 'User Store',
        PermissionName::USER_UPDATE->name => 'User Update',
        PermissionName::USER_DESTROY->name => 'User Destroy',
        PermissionName::USER_TRASHED->name => 'User Trashed',
        PermissionName::USER_RESTORE->name => 'User Restore',
        PermissionName::USER_FORCE_DESTROY->name => 'User Force Destroy',
        PermissionName::ROLE_INDEX->name => 'Role Index',
        PermissionName::ROLE_STORE->name => 'Role Store',
        PermissionName::ROLE_UPDATE->name => 'Role Update',
        PermissionName::ROLE_DESTROY->name => 'Role Destroy',
        PermissionName::PERMISSION_INDEX->name => 'Permission Index',
    ],
];
