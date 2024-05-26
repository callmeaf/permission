<?php

namespace Callmeaf\Permission\Http\Controllers\V1\Api;

use Callmeaf\Base\Http\Controllers\V1\Api\ApiController;
use Callmeaf\Permission\Events\RoleDestroyed;
use Callmeaf\Permission\Events\RoleIndexed;
use Callmeaf\Permission\Events\RoleShowed;
use Callmeaf\Permission\Events\RoleStored;
use Callmeaf\Permission\Events\RoleSyncedPermissions;
use Callmeaf\Permission\Events\RoleUpdated;
use Callmeaf\Permission\Http\Requests\V1\Api\RoleDestroyRequest;
use Callmeaf\Permission\Http\Requests\V1\Api\RoleIndexRequest;
use Callmeaf\Permission\Http\Requests\V1\Api\RoleShowRequest;
use Callmeaf\Permission\Http\Requests\V1\Api\RoleStoreRequest;
use Callmeaf\Permission\Http\Requests\V1\Api\RoleSyncPermissionsRequest;
use Callmeaf\Permission\Http\Requests\V1\Api\RoleUpdateRequest;
use Callmeaf\Permission\Http\Resources\V1\Api\RoleResource;
use Callmeaf\Permission\Models\Role;
use Callmeaf\Permission\Services\V1\RoleService;

class RoleController extends ApiController
{
    protected RoleService $roleService;
    public function __construct()
    {
        app(config('callmeaf-role.middlewares.role'))($this);
        $this->roleService = app(config('callmeaf-role.service'));
    }

    public function index(RoleIndexRequest $request)
    {
        try {
            $roles = $this->roleService->all(
                relations: config('callmeaf-role.resources.index.relations'),
                columns: config('callmeaf-role.resources.index.columns'),
                filters: $request->validated(),
            )->getCollection(asResourceCollection: true,asResponseData: true,attributes: config('callmeaf-role.resources.index.attributes'),events: [
                RoleIndexed::class,
            ]);
            return apiResponse([
                'roles' => $roles,
            ],__('callmeaf-base::v1.successful_loaded'));
        } catch (\Exception $exception) {
            report($exception);
            return apiResponse([],$exception);
        }
    }

    public function store(RoleStoreRequest $request)
    {
        try {
            $role = $this->roleService->create(data: $request->validated(),events: [
                RoleStored::class
            ])->getModel(asResource: true,attributes: config('callmeaf-role.resources.store.attributes'),relations: config('callmeaf-role.resources.store.relations'));
            return apiResponse([
                'role' => $role,
            ],__('callmeaf-base::v1.successful_created', [
                'title' => $role->responseTitles('store'),
            ]));
        } catch (\Exception $exception) {
            report($exception);
            return apiResponse([],$exception);
        }
    }

    public function show(RoleShowRequest $request,Role $role)
    {
        try {
            $role = $this->roleService->setModel($role)->getModel(
                asResource: true,
                attributes: config('callmeaf-role.resources.show.attributes'),
                relations: config('callmeaf-role.resources.show.relations'),
                events: [
                    RoleShowed::class,
                ],
            );
            return apiResponse([
                'role' => $role,
            ],__('callmeaf-base::v1.successful_loaded'));
        } catch (\Exception $exception) {
            report($exception);
            return apiResponse([],$exception);
        }
    }

    public function update(RoleUpdateRequest $request,Role $role)
    {
        try {
            $role = $this->roleService->setModel($role)->update(data: $request->validated(),events: [
                RoleUpdated::class,
            ])->getModel(asResource: true,attributes: config('callmeaf-role.resources.update.attributes'),relations: config('callmeaf-role.resources.update.relations'));
            return apiResponse([
                'role' => $role,
            ],__('callmeaf-base::v1.successful_updated', [
                'title' =>  $role->responseTitles('update')
            ]));
        } catch (\Exception $exception) {
            report($exception);
            return apiResponse([],$exception);
        }
    }

    public function destroy(RoleDestroyRequest $request,Role $role)
    {
        try {
            $role = $this->roleService->setModel($role)->delete(events: [
                RoleDestroyed::class,
            ])->getModel(asResource: true,attributes: config('callmeaf-role.resources.destroy.attributes'),relations: config('callmeaf-role.resources.destroy.relations'));
            return apiResponse([
                'role' => $role,
            ],__('callmeaf-base::v1.successful_deleted', [
                'title' =>  $role->responseTitles('destroy')
            ]));
        } catch (\Exception $exception) {
            report($exception);
            return apiResponse([],$exception);
        }
    }


    public function syncPermissions(RoleSyncPermissionsRequest $request,Role $role)
    {
        try {
            $role = $this->roleService->setModel($role)->syncPermissions(permissions: $request->get('permissions_ids',[]))
                ->getModel(
                    asResource: true,
                    attributes: config('callmeaf-role.resources.sync_permissions.attributes'),
                    relations: config('callmeaf-role.resources.sync_permissions.relations'),
                    events: [
                        RoleSyncedPermissions::class,
                    ],
                );
             return apiResponse([
                 'role' => $role,
             ],__('callmeaf-base::v1.successful_updated', [
                 'title' => $role->responseTitles('sync_permissions'),
             ]));
        } catch (\Exception $exception) {
            report($exception);
            return apiResponse([],$exception);
        }
    }
}
