<?php

namespace Callmeaf\Permission\Enums;

enum PermissionName: string
{
    case USER_INDEX = 'user_index';
    case USER_STORE = 'user_store';
    case USER_SHOW = 'user_show';
    case USER_UPDATE = 'user_update';
    case USER_DESTROY = 'user_destroy';
    case USER_TRASHED = 'user_trashed';
    case USER_RESTORE = 'user_restore';
    case USER_FORCE_DESTROY = 'user_force_destroy';
    case ROLE_INDEX = 'role_index';
    case ROLE_STORE = 'role_store';
    case ROLE_SHOW = 'role_show';
    case ROLE_UPDATE = 'role_update';
    case ROLE_DESTROY = 'role_destroy';
    case PERMISSION_INDEX = 'permission_index';
    case PERMISSION_SHOW = 'permission_show';
    case PRODUCT_CATEGORY_INDEX = 'product_category_index';
    case PRODUCT_CATEGORY_STORE = 'product_category_store';
    case PRODUCT_CATEGORY_SHOW = 'product_category_show';
    case PRODUCT_CATEGORY_UPDATE = 'product_category_update';
    case PRODUCT_CATEGORY_DESTROY = 'product_category_destroy';
    case PRODUCT_CATEGORY_TRASHED = 'product_category_trashed';
    case PRODUCT_CATEGORY_RESTORE = 'product_category_restore';
    case PRODUCT_CATEGORY_FORCE_DESTROY = 'product_category_force_destroy';
}
