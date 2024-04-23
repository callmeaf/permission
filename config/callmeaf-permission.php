<?php

return [
    'model' => \Callmeaf\Permission\Models\Permission::class,
    'model_resource' => \Callmeaf\Permission\Http\Resources\V1\Api\PermissionResource::class,
    'model_resource_collection' => \Callmeaf\Permission\Http\Resources\V1\Api\PermissionCollection::class,
    'service' => \Callmeaf\Permission\Services\V1\PermissionService::class,
    'default_values' => [
        'guard_name' => 'web',
    ],
    'events' => [
        // events
    ],
    'validations' => [
        'index' => [
            'name' => false,
        ],
    ],
    'resources' => [
        'index' => [
            'relations' => [],
            'columns' => [
                'id',
                'name',
            ],
            'attributes' => [
                'id',
                'name',
                'name_text',
            ],
        ],
    ],
    'controllers' => [
        'permissions' => \Callmeaf\Permission\Http\Controllers\V1\Api\PermissionController::class,
    ],
    'form_request_authorizers' => [
        'permissions' => \Callmeaf\Permission\Utilities\V1\PermissionFormRequestAuthorizer::class,
    ],
    'middlewares' => [
        'global' => [],
    ],
    'searcher' => \Callmeaf\Permission\Utilities\V1\PermissionSearcher::class,
    'seeders' => [
        \Callmeaf\Permission\Seeders\PermissionSeeder::class,
    ],
];
