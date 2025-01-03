<?php

namespace Callmeaf\Permission\Utilities\V1\Api\Role;

use Callmeaf\Base\Http\Controllers\BaseController;
use Callmeaf\Base\Utilities\V1\ControllerMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class RoleControllerMiddleware extends ControllerMiddleware
{
    public function __invoke(): array
    {
        return [
            new Middleware(middleware: 'auth:sanctum',only: [
                'index',
                'store',
                'show',
                'destroy',
                'syncPermissions',
            ])
        ];
    }
}
