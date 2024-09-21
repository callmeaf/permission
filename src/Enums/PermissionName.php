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
    case PRODUCT_INDEX = 'product_index';
    case PRODUCT_STORE = 'product_store';
    case PRODUCT_SHOW = 'product_show';
    case PRODUCT_UPDATE = 'product_update';
    case PRODUCT_DESTROY = 'product_destroy';
    case PRODUCT_TRASHED = 'product_trashed';
    case PRODUCT_RESTORE = 'product_restore';
    case PRODUCT_FORCE_DESTROY = 'product_force_destroy';
    case PACKAGE_INDEX = 'package_index';
    case PACKAGE_STORE = 'package_store';
    case PACKAGE_SHOW = 'package_show';
    case PACKAGE_UPDATE = 'package_update';
    case PACKAGE_DESTROY = 'package_destroy';
    case VARIATION_INDEX = 'variation_index';
    case VARIATION_STORE = 'variation_store';
    case VARIATION_SHOW = 'variation_show';
    case VARIATION_UPDATE = 'variation_update';
    case VARIATION_DESTROY = 'variation_destroy';
    case PAYMENT_INDEX = 'payment_index';
    case PAYMENT_STORE = 'payment_store';
    case PAYMENT_SHOW = 'payment_show';
    case PAYMENT_UPDATE = 'payment_update';
    case PAYMENT_DESTROY = 'payment_destroy';
    case PAYMENT_TRASHED = 'payment_trashed';
    case PAYMENT_RESTORE = 'payment_restore';
    case PAYMENT_FORCE_DESTROY = 'payment_force_destroy';
    case CART_INDEX = 'cart_index';
    case CART_STORE = 'cart_store';
    case CART_SHOW = 'cart_show';
    case CART_UPDATE = 'cart_update';
    case CART_DESTROY = 'cart_destroy';
    case CART_TRASHED = 'cart_trashed';
    case CART_RESTORE = 'cart_restore';
    case CART_FORCE_DESTROY = 'cart_force_destroy';
}
