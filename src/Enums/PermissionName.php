<?php

namespace Callmeaf\Permission\Enums;

enum PermissionName: string
{
    case USER_INDEX = 'user_index';
    case USER_STORE = 'user_store';
    case USER_UPDATE = 'user_update';
    case USER_DESTROY = 'user_destroy';
    case USER_TRASHED = 'user_trashed';
    case USER_RESTORE = 'user_restore';
    case USER_FORCE_DESTROY = 'user_force_destroy';
    case ROLE_INDEX = 'role_index';
    case ROLE_STORE = 'role_store';
    case ROLE_UPDATE = 'role_update';
    case ROLE_DESTROY = 'role_destroy';
    case PERMISSION_INDEX = 'permission_index';
    case PERMISSION_SHOW = 'permission_show';
}
