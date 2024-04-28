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
        \Callmeaf\Permission\Events\RoleStored::class => [
            // listeners
        ],
        \Callmeaf\Permission\Events\RoleUpdated::class => [
            // listeners
        ],
        \Callmeaf\Permission\Events\RoleDestroyed::class => [
            // listeners
        ],
    ],
    'validations' => [
        'index' => [
            'name' => false,
            'name_fa' => false,
        ],
        'store' => [
            'name' => true,
            'name_fa' => true,
        ],
        'show' => [

        ],
        'update' => [
            'name' => true,
            'name_fa' => true,
        ],
        'destroy' => [
            //
        ],
        'sync_permissions' => [
            'permissions_ids' => false,
            'permissions_ids.*' => true,
        ],
    ],
    'resources' => [
        'index' => [
            'relations' => [],
            'columns' => [
                'id',
                'name',
                'name_fa',
                'created_at',
                'updated_at',
            ],
            'attributes' => [
                'id',
                'name',
                'name_fa',
                'created_at_text',
                'updated_at_text',
            ],
        ],
        'store' => [
            'relations' => [],
            'attributes' => [
                'id',
                'name',
                'name_fa',
                'created_at_text',
                'updated_at_text',
            ],
        ],
        'show' => [
            'relations' => [],
            'attributes' => [
                'id',
                'name',
                'name_fa',
                'created_at_text',
                'updated_at_text',
            ],
        ],
        'update' => [
            'relations' => [],
            'attributes' => [
                'id',
                'name',
                'name_fa',
                'created_at_text',
                'updated_at_text',
            ],
        ],
        'destroy' => [
            'relations' => [],
            'attributes' => [
                'id',
                'name',
                'name_fa',
                'created_at_text',
                'updated_at_text',
            ],
        ],
        'sync_permissions' => [
            'relations' => [],
            'attributes' => [
                'id',
                'name',
                'name_fa',
                'created_at_text',
                'updated_at_text',
            ],
        ],
    ],
    'controllers' => [
        'roles' => \Callmeaf\Permission\Http\Controllers\V1\Api\RoleController::class,
    ],
    'form_request_authorizers' => [
        'role' => \Callmeaf\Permission\Utilities\V1\RoleFormRequestAuthorizer::class,
    ],
    'middlewares' => [
        'global' => [
            'auth:sanctum',
        ],
    ],
    'searcher' => \Callmeaf\Permission\Utilities\V1\RoleSearcher::class,
    'enums' => [
        'names' => \Callmeaf\Permission\Enums\RoleName::class,
    ],
    'permissions' => [
        \Callmeaf\Permission\Enums\RoleName::SUPER_ADMIN->name => [
            \Callmeaf\Permission\Enums\PermissionName::USER_INDEX->value,
            \Callmeaf\Permission\Enums\PermissionName::USER_STORE->value,
            \Callmeaf\Permission\Enums\PermissionName::USER_UPDATE->value,
            \Callmeaf\Permission\Enums\PermissionName::USER_DESTROY->value,
            \Callmeaf\Permission\Enums\PermissionName::USER_TRASHED->value,
            \Callmeaf\Permission\Enums\PermissionName::USER_RESTORE->value,
            \Callmeaf\Permission\Enums\PermissionName::ROLE_INDEX->value,
            \Callmeaf\Permission\Enums\PermissionName::ROLE_STORE->value,
            \Callmeaf\Permission\Enums\PermissionName::ROLE_UPDATE->value,
            \Callmeaf\Permission\Enums\PermissionName::ROLE_DESTROY->value,
            \Callmeaf\Permission\Enums\PermissionName::PERMISSION_INDEX->value,
            \Callmeaf\Permission\Enums\PermissionName::PERMISSION_SHOW->value,
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
];
