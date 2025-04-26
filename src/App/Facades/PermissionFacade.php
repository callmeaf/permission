<?php

namespace Callmeaf\Permission\App\Facades;

use Callmeaf\Permission\App\Services\PermissionService;
use Illuminate\Support\Facades\Facade;

/**
 * @mixin PermissionService
 */
class PermissionFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return PermissionService::class;
    }
}
