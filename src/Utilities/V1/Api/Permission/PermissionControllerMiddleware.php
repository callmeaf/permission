<?php

namespace Callmeaf\Permission\Utilities\V1\Api\Permission;

use Callmeaf\Base\Http\Controllers\BaseController;
use Callmeaf\Base\Utilities\V1\ControllerMiddleware;

class PermissionControllerMiddleware extends ControllerMiddleware
{
    public function __invoke(BaseController $controller): void
    {
        $controller->middleware([
            'auth:sanctum',
        ])->only([
            'index',
            'show',
        ]);
    }
}
