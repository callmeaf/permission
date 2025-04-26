<?php

use Callmeaf\Permission\App\Enums\PermissionStatus;
use Callmeaf\Permission\App\Enums\PermissionType;

return [
    PermissionStatus::class => [
        PermissionStatus::ACTIVE->name => 'Active',
        PermissionStatus::INACTIVE->name => 'InActive',
        PermissionStatus::PENDING->name => 'Pending',
    ],
    PermissionType::class => [
        //
    ],
];
