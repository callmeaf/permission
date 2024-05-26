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
        \Callmeaf\Permission\Events\PermissionIndexed::class => [
            // listeners
        ],
        \Callmeaf\Permission\Events\PermissionShowed::class => [
            // listeners
        ],
    ],
    'validations' => [
        'permission' => \Callmeaf\Permission\Utilities\V1\Permission\Api\PermissionFormRequestValidator::class,
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
        'show' => [
            'relations' => [
                'roles',
            ],
            'attributes' => [
                'id',
                'name',
                'name_text',
                'roles',
                '!roles' => [
                    'id',
                    'name',
                    'name_fa',
                    'name_full',
                ],
            ],
        ],
    ],
    'controllers' => [
        'permissions' => \Callmeaf\Permission\Http\Controllers\V1\Api\PermissionController::class,
    ],
    'form_request_authorizers' => [
        'permission' => \Callmeaf\Permission\Utilities\V1\Permission\Api\PermissionFormRequestAuthorizer::class,
    ],
    'middlewares' => [
        'permission' => \Callmeaf\Permission\Utilities\V1\Permission\Api\PermissionControllerMiddleware::class,
    ],
    'searcher' => \Callmeaf\Permission\Utilities\V1\Permission\Api\PermissionSearcher::class,
    'seeders' => [
        \Callmeaf\Permission\Seeders\PermissionSeeder::class,
    ],
];
