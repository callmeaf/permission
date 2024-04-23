<?php

namespace Callmeaf\Permission\Http\Controllers\V1\Api;

use Callmeaf\Base\Http\Controllers\V1\Api\ApiController;
use Callmeaf\Permission\Http\Requests\V1\Api\PermissionIndexRequest;
use Callmeaf\Permission\Services\V1\PermissionService;

class PermissionController extends ApiController
{
    protected PermissionService $permissionService;
    public function __construct()
    {
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
}
