<?php

return [
    'model' => \Callmeaf\Permission\Models\Role::class,
    'model_resource' => \Callmeaf\Permission\Http\Resources\V1\Api\RoleResource::class,
    'model_resource_collection' => \Callmeaf\Permission\Http\Resources\V1\Api\RoleCollection::class,
    'service' => \Callmeaf\Permission\Services\V1\RoleService::class,
    'default_values' => [
        'guard_name' => 'web'
    ],
    'events' => [
        \Callmeaf\Permission\Events\RoleIndexed::class => [
            // listeners
        ],
        \Callmeaf\Permission\Events\RoleStored::class => [
            // listeners
        ],
        \Callmeaf\Permission\Events\RoleShowed::class => [
            // listeners
        ],
        \Callmeaf\Permission\Events\RoleUpdated::class => [
            // listeners
        ],
        \Callmeaf\Permission\Events\RoleDestroyed::class => [
            // listeners
        ],
        \Callmeaf\Permission\Events\RoleSyncedPermissions::class => [
            // listeners
        ],

    ],
    'validations' => [
        'role' => \Callmeaf\Permission\Utilities\V1\Api\Role\RoleFormRequestValidator::class,
    ],
    'resources' => [
        'role' => \Callmeaf\Permission\Utilities\V1\Api\Role\RoleResources::class,
    ],
    'controllers' => [
        'roles' => \Callmeaf\Permission\Http\Controllers\V1\Api\RoleController::class,
    ],
    'form_request_authorizers' => [
        'role' => \Callmeaf\Permission\Utilities\V1\Api\Role\RoleFormRequestAuthorizer::class,
    ],
    'middlewares' => [
        'role' => \Callmeaf\Permission\Utilities\V1\Api\Role\RoleControllerMiddleware::class,
    ],
    'searcher' => \Callmeaf\Permission\Utilities\V1\Api\Role\RoleSearcher::class,
    'enums' => [
        'names' => \Callmeaf\Permission\Enums\RoleName::class,
    ],
    'permissions' => [
        \Callmeaf\Permission\Enums\RoleName::SUPER_ADMIN->name => [
           // get all permissions if empty array, only for super admin role.
        ],
        \Callmeaf\Permission\Enums\RoleName::ADMIN->name => [
            \Callmeaf\Permission\Enums\PermissionName::USER_INDEX->value,
            \Callmeaf\Permission\Enums\PermissionName::USER_STORE->value,
            \Callmeaf\Permission\Enums\PermissionName::USER_UPDATE->value,
            \Callmeaf\Permission\Enums\PermissionName::USER_DESTROY->value,
            \Callmeaf\Permission\Enums\PermissionName::USER_TRASHED->value,
            \Callmeaf\Permission\Enums\PermissionName::USER_RESTORE->value,
        ],
        \Callmeaf\Permission\Enums\RoleName::USER->name => [
            \Callmeaf\Permission\Enums\PermissionName::USER_STORE->value,
            \Callmeaf\Permission\Enums\PermissionName::USER_UPDATE->value,
            \Callmeaf\Permission\Enums\PermissionName::USER_DESTROY->value,
        ],
    ],
    'seeders' => [
        \Callmeaf\Permission\Seeders\RoleSeeder::class,
    ],
];
