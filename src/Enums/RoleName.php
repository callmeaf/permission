<?php

namespace Callmeaf\Permission\Enums;

enum RoleName: string
{
    case SUPER_ADMIN = 'super_admin';
    case ADMIN = 'admin';
    case USER = 'user';
}
