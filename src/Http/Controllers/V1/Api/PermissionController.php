<?php

namespace Callmeaf\Permission\Http\Controllers\V1\Api;

use Callmeaf\Base\Http\Controllers\V1\Api\ApiController;
use Callmeaf\Permission\Events\PermissionIndexed;
use Callmeaf\Permission\Events\PermissionShowed;
use Callmeaf\Permission\Http\Requests\V1\Api\PermissionIndexRequest;
use Callmeaf\Permission\Http\Requests\V1\Api\PermissionShowRequest;
use Callmeaf\Permission\Models\Permission;
use Callmeaf\Permission\Services\V1\PermissionService;
use Callmeaf\Permission\Utilities\V1\Api\Permission\PermissionResources;

class PermissionController extends ApiController
{
    protected PermissionService $permissionService;
    protected PermissionResources $permissionResources;
    public function __construct()
    {
        app(config('callmeaf-permission.middlewares.permission'))($this);
        $this->permissionService = app(config('callmeaf-permission.service'));
        $this->permissionResources = app(config('callmeaf-permission.resources.permission'));
    }

    public function index(PermissionIndexRequest $request)
    {
        try {
            $resources = $this->permissionResources->index();
            $permissions = $this->permissionService->all(
                relations: $resources->relations(),
                columns: $resources->columns(),
                filters: $request->validated(),
            )->getCollection(asResourceCollection: true,asResponseData: true,attributes: $resources->attributes(),events: [
                PermissionIndexed::class,
            ]);
            return apiResponse([
                'permissions' => $permissions,
            ],__('callmeaf-base::v1.successful_loaded'));
        } catch (\Exception $exception) {
            report($exception);
            return apiResponse([],$exception);
        }
    }

    public function show(PermissionShowRequest $request,Permission $permission)
    {
        try {
            $resources = $this->permissionResources->show();
             $permission = $this->permissionService->setModel($permission)->getModel(
                 asResource: true,
                 attributes: $resources->attributes(),
                 relations: $resources->relations(),
                 events: [
                     PermissionShowed::class,
                 ],
             );
             return apiResponse([
                 'permission' => $permission,
             ],__('base::v1.successful_loaded'));
        } catch (\Exception $exception) {
            report($exception);
            return apiResponse([],$exception);
        }
    }
}
