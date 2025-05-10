<?php

use Callmeaf\Base\App\Enums\RequestType;

return [
    'model' => \Callmeaf\Permission\App\Models\Permission::class,
    'route_key_name' => 'id',
    'repo' => \Callmeaf\Permission\App\Repo\V1\PermissionRepo::class,
    'resources' => [
        RequestType::API->value => [
            'resource' => \Callmeaf\Permission\App\Http\Resources\Api\V1\PermissionResource::class,
            'resource_collection' => \Callmeaf\Permission\App\Http\Resources\Api\V1\PermissionCollection::class,
        ],
        RequestType::WEB->value => [
            'resource' => \Callmeaf\Permission\App\Http\Resources\Web\V1\PermissionResource::class,
            'resource_collection' => \Callmeaf\Permission\App\Http\Resources\Web\V1\PermissionCollection::class,
        ],
        RequestType::ADMIN->value => [
            'resource' => \Callmeaf\Permission\App\Http\Resources\Admin\V1\PermissionResource::class,
            'resource_collection' => \Callmeaf\Permission\App\Http\Resources\Admin\V1\PermissionCollection::class,
        ],
    ],
    'events' => [
        RequestType::API->value => [
            \Callmeaf\Permission\App\Events\Api\V1\PermissionIndexed::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Api\V1\PermissionCreated::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Api\V1\PermissionShowed::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Api\V1\PermissionUpdated::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Api\V1\PermissionDeleted::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Api\V1\PermissionStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Api\V1\PermissionTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::WEB->value => [
            \Callmeaf\Permission\App\Events\Web\V1\PermissionIndexed::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Web\V1\PermissionCreated::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Web\V1\PermissionShowed::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Web\V1\PermissionUpdated::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Web\V1\PermissionDeleted::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Web\V1\PermissionStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Web\V1\PermissionTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::ADMIN->value => [
            \Callmeaf\Permission\App\Events\Admin\V1\PermissionIndexed::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Admin\V1\PermissionCreated::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Admin\V1\PermissionShowed::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Admin\V1\PermissionUpdated::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Admin\V1\PermissionDeleted::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Admin\V1\PermissionStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\Permission\App\Events\Admin\V1\PermissionTypeUpdated::class => [
                // listeners
            ],
        ],
    ],
    'requests' => [
        RequestType::API->value => [
            'index' => \Callmeaf\Permission\App\Http\Requests\Api\V1\PermissionIndexRequest::class,
            'store' => \Callmeaf\Permission\App\Http\Requests\Api\V1\PermissionStoreRequest::class,
            'show' => \Callmeaf\Permission\App\Http\Requests\Api\V1\PermissionShowRequest::class,
            'update' => \Callmeaf\Permission\App\Http\Requests\Api\V1\PermissionUpdateRequest::class,
            'destroy' => \Callmeaf\Permission\App\Http\Requests\Api\V1\PermissionDestroyRequest::class,
            'statusUpdate' => \Callmeaf\Permission\App\Http\Requests\Api\V1\PermissionStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\Permission\App\Http\Requests\Api\V1\PermissionTypeUpdateRequest::class,
        ],
        RequestType::WEB->value => [
            'index' => \Callmeaf\Permission\App\Http\Requests\Web\V1\PermissionIndexRequest::class,
            'create' => \Callmeaf\Permission\App\Http\Requests\Web\V1\PermissionCreateRequest::class,
            'store' => \Callmeaf\Permission\App\Http\Requests\Web\V1\PermissionStoreRequest::class,
            'show' => \Callmeaf\Permission\App\Http\Requests\Web\V1\PermissionShowRequest::class,
            'edit' => \Callmeaf\Permission\App\Http\Requests\Web\V1\PermissionEditRequest::class,
            'update' => \Callmeaf\Permission\App\Http\Requests\Web\V1\PermissionUpdateRequest::class,
            'destroy' => \Callmeaf\Permission\App\Http\Requests\Web\V1\PermissionDestroyRequest::class,
            'statusUpdate' => \Callmeaf\Permission\App\Http\Requests\Web\V1\PermissionStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\Permission\App\Http\Requests\Web\V1\PermissionTypeUpdateRequest::class,
        ],
        RequestType::ADMIN->value => [
            'index' => \Callmeaf\Permission\App\Http\Requests\Admin\V1\PermissionIndexRequest::class,
            'store' => \Callmeaf\Permission\App\Http\Requests\Admin\V1\PermissionStoreRequest::class,
            'show' => \Callmeaf\Permission\App\Http\Requests\Admin\V1\PermissionShowRequest::class,
            'update' => \Callmeaf\Permission\App\Http\Requests\Admin\V1\PermissionUpdateRequest::class,
            'destroy' => \Callmeaf\Permission\App\Http\Requests\Admin\V1\PermissionDestroyRequest::class,
            'statusUpdate' => \Callmeaf\Permission\App\Http\Requests\Admin\V1\PermissionStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\Permission\App\Http\Requests\Admin\V1\PermissionTypeUpdateRequest::class,
        ],
    ],
    'controllers' => [
        RequestType::API->value => [
            'permission' => \Callmeaf\Permission\App\Http\Controllers\Api\V1\PermissionController::class,
        ],
        RequestType::WEB->value => [
            'permission' => \Callmeaf\Permission\App\Http\Controllers\Web\V1\PermissionController::class,
        ],
        RequestType::ADMIN->value => [
            'permission' => \Callmeaf\Permission\App\Http\Controllers\Admin\V1\PermissionController::class,
        ],
    ],
    'routes' => [
        RequestType::API->value => [
            'prefix' => 'permissions',
            'as' => 'permissions.',
            'middleware' => [],
        ],
        RequestType::WEB->value => [
            'prefix' => 'permissions',
            'as' => 'permissions.',
            'middleware' => [],
        ],
        RequestType::ADMIN->value => [
            'prefix' => 'permissions',
            'as' => 'permissions.',
            'middleware' => [
                "auth:sanctum",
                "role:" . \Callmeaf\Role\App\Enums\RoleName::SUPER_ADMIN->value,
            ],
        ],
    ],
    'enums' => [
         'status' => \Callmeaf\Permission\App\Enums\PermissionStatus::class,
         'type' => \Callmeaf\Permission\App\Enums\PermissionType::class,
        'cycle' => \Callmeaf\Permission\App\Enums\PermissionCycle::class,
    ],
     'exports' => [
        RequestType::API->value => [
            'excel' => \Callmeaf\Permission\App\Exports\Api\V1\PermissionsExport::class,
        ],
        RequestType::WEB->value => [
            'excel' => \Callmeaf\Permission\App\Exports\Web\V1\PermissionsExport::class,
        ],
        RequestType::ADMIN->value => [
            'excel' => \Callmeaf\Permission\App\Exports\Admin\V1\PermissionsExport::class,
        ],
     ],
     'imports' => [
         RequestType::API->value => [
             'excel' => \Callmeaf\Permission\App\Imports\Api\V1\PermissionsImport::class,
         ],
         RequestType::WEB->value => [
             'excel' => \Callmeaf\Permission\App\Imports\Web\V1\PermissionsImport::class,
         ],
         RequestType::ADMIN->value => [
             'excel' => \Callmeaf\Permission\App\Imports\Admin\V1\PermissionsImport::class,
         ],
     ],
    'facades' => [
        [
            'alias' => 'Perm',
            'service' => \Callmeaf\Permission\App\Services\PermissionService::class,
            'facade' => \Callmeaf\Permission\App\Facades\PermissionFacade::class,
        ],
    ],
];
