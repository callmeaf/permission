<?php

namespace Callmeaf\Permission\App\Enums;


use Callmeaf\Base\App\Enums\BaseStatus;

enum PermissionStatus: string
{
    case ACTIVE = BaseStatus::ACTIVE->value;
    case INACTIVE = BaseStatus::INACTIVE->value;
    case PENDING = BaseStatus::PENDING->value;
}
