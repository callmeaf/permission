<?php

namespace Callmeaf\Permission\Http\Controllers\V1\Api;

use Callmeaf\Base\Http\Controllers\V1\Api\ApiController;
use Callmeaf\Permission\Http\Requests\V1\Api\PermissionIndexRequest;
use Callmeaf\Permission\Http\Requests\V1\Api\PermissionShowRequest;
use Callmeaf\Permission\Models\Permission;
use Callmeaf\Permission\Services\V1\PermissionService;

class PermissionController extends ApiController
{
    protected PermissionService $permissionService;
    public function __construct()
    {
        app(config('callmeaf-permission.middlewares.permission'))($this);
        $this->permissionService = app(config('callmeaf-permission.service'));
    }

    public function index(PermissionIndexRequest $request)
    {
        try {
            $permissions = $this->permissionService->all(
                relations: config('callmeaf-permission.resources.index.relations'),
                columns: config('callmeaf-permission.resources.index.columns'),
                filters: $request->validated(),
            )->getCollection(asResourceCollection: true,asResponseData: true,attributes: config('callmeaf-permission.resources.index.attributes'));
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
             $permission = $this->permissionService->setModel($permission)->getModel(asResource: true,attributes: config('callmeaf-permission.resources.show.attributes'),relations: config('callemaf-permission.resources.show.relations'));
             return apiResponse([
                 'permission' => $permission,
             ],__('base::v1.successful_loaded'));
        } catch (\Exception $exception) {
            report($exception);
            return apiResponse([],$exception);
        }
    }
}
