<?php

namespace Callmeaf\Permission\Utilities\V1\Role\Api;

use Callmeaf\Base\Http\Controllers\BaseController;
use Callmeaf\Base\Utilities\V1\ControllerMiddleware;

class RoleControllerMiddleware extends ControllerMiddleware
{
    public function __invoke(BaseController $controller): void
    {
        $controller->middleware([
            'auth:sanctum',
        ])->only([
            'index',
            'store',
            'show',
            'destroy',
            'syncPermissions',
        ]);
    }
}
