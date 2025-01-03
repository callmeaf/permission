<?php

namespace Callmeaf\Permission\Http\Controllers\V1\Api;

use Callmeaf\Base\Enums\ResponseTitle;
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
use Callmeaf\Permission\Models\Role;
use Callmeaf\Permission\Services\V1\RoleService;
use Callmeaf\Permission\Utilities\V1\Api\Role\RoleResources;

class RoleController extends ApiController
{
    protected RoleService $roleService;
    protected RoleResources $roleResources;
    public function __construct()
    {
        $this->roleService = app(config('callmeaf-role.service'));
        $this->roleResources = app(config('callmeaf-role.resources.role'));
    }

    public static function middleware(): array
    {
        return app(config('callmeaf-role.middlewares.role'))();
    }

    public function index(RoleIndexRequest $request)
    {
        try {
            $resources = $this->roleResources->index();
            $roles = $this->roleService->all(
                relations: $resources->relations(),
                columns: $resources->columns(),
                filters: $request->validated(),
            )->getCollection(asResourceCollection: true,asResponseData: true,attributes: $resources->attributes(),events: [
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
            $resources = $this->roleResources->index();
            $role = $this->roleService->create(data: $request->validated(),events: [
                RoleStored::class
            ])->getModel(asResource: true,attributes: $resources->attributes(),relations: $resources->relations());
            return apiResponse([
                'role' => $role,
            ],__('callmeaf-base::v1.successful_created', [
                'title' => $role->responseTitles(ResponseTitle::STORE),
            ]));
        } catch (\Exception $exception) {
            report($exception);
            return apiResponse([],$exception);
        }
    }

    public function show(RoleShowRequest $request,Role $role)
    {
        try {
            $resources = $this->roleResources->show();
            $role = $this->roleService->setModel($role)->getModel(
                asResource: true,
                attributes: $resources->attributes(),
                relations: $resources->relations(),
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
            $resources = $this->roleResources->show();
            $role = $this->roleService->setModel($role)->update(data: $request->validated(),events: [
                RoleUpdated::class,
            ])->getModel(asResource: true,attributes: $resources->attributes(),relations: $resources->relations());
            return apiResponse([
                'role' => $role,
            ],__('callmeaf-base::v1.successful_updated', [
                'title' =>  $role->responseTitles(ResponseTitle::UPDATE)
            ]));
        } catch (\Exception $exception) {
            report($exception);
            return apiResponse([],$exception);
        }
    }

    public function destroy(RoleDestroyRequest $request,Role $role)
    {
        try {
            $resources = $this->roleResources->destroy();
            $role = $this->roleService->setModel($role)->delete(events: [
                RoleDestroyed::class,
            ])->getModel(asResource: true,attributes: $resources->attributes(),relations: $resources->relations());
            return apiResponse([
                'role' => $role,
            ],__('callmeaf-base::v1.successful_deleted', [
                'title' =>  $role->responseTitles(ResponseTitle::DESTROY)
            ]));
        } catch (\Exception $exception) {
            report($exception);
            return apiResponse([],$exception);
        }
    }


    public function syncPermissions(RoleSyncPermissionsRequest $request,Role $role)
    {
        try {
            $resources = $this->roleResources->syncPermissions();
            $role = $this->roleService->setModel($role)->syncPermissions(permissions: $request->get('permissions_ids',[]))
                ->getModel(
                    asResource: true,
                    attributes: $resources->attributes(),
                    relations: $resources->relations(),
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
