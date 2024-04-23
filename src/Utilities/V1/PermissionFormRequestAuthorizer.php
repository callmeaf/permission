<?php

namespace Callmeaf\Permission\Utilities\V1;

use Callmeaf\Base\Utilities\V1\FormRequestAuthorizer;
use Callmeaf\Permission\Enums\PermissionName;

class PermissionFormRequestAuthorizer extends FormRequestAuthorizer
{
    public function index(): bool
    {
        return userCan(PermissionName::PERMISSION_INDEX);
    }
}
