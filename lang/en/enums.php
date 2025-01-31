<?php

use Callmeaf\Permission\Enums\PermissionName;
use Callmeaf\Permission\Enums\RoleName;

return [
    PermissionName::class => [
        PermissionName::USER_INDEX->name => 'User Index',
        PermissionName::USER_STORE->name => 'User Store',
        PermissionName::USER_SHOW->name => 'User Show',
        PermissionName::USER_UPDATE->name => 'User Update',
        PermissionName::USER_DESTROY->name => 'User Destroy',
        PermissionName::USER_TRASHED->name => 'User Trashed',
        PermissionName::USER_RESTORE->name => 'User Restore',
        PermissionName::USER_FORCE_DESTROY->name => 'User Force Destroy',

        PermissionName::ROLE_INDEX->name => 'Role Index',
        PermissionName::ROLE_STORE->name => 'Role Store',
        PermissionName::ROLE_UPDATE->name => 'Role Update',
        PermissionName::ROLE_DESTROY->name => 'Role Destroy',

        PermissionName::PERMISSION_INDEX->name => 'Permission Index',
        PermissionName::PERMISSION_SHOW->name => 'Permission Show',

        PermissionName::PRODUCT_CATEGORY_INDEX->name => 'Product Category Index',
        PermissionName::PRODUCT_CATEGORY_STORE->name => 'Product Category Store',
        PermissionName::PRODUCT_CATEGORY_SHOW->name => 'Product Category Show',
        PermissionName::PRODUCT_CATEGORY_UPDATE->name => 'Product Category Update',
        PermissionName::PRODUCT_CATEGORY_DESTROY->name => 'Product Category Destroy',
        PermissionName::PRODUCT_CATEGORY_TRASHED->name => 'Product Category Trashed',
        PermissionName::PRODUCT_CATEGORY_RESTORE->name => 'Product Category Restore',
        PermissionName::PRODUCT_CATEGORY_FORCE_DESTROY->name => 'Product Category Force Destroy',

        PermissionName::PRODUCT_INDEX->name => 'Product Index',
        PermissionName::PRODUCT_STORE->name => 'Product Store',
        PermissionName::PRODUCT_SHOW->name => 'Product Show',
        PermissionName::PRODUCT_UPDATE->name => 'Product Update',
        PermissionName::PRODUCT_DESTROY->name => 'Product Destroy',
        PermissionName::PRODUCT_TRASHED->name => 'Product Trashed',
        PermissionName::PRODUCT_RESTORE->name => 'Product Restore',
        PermissionName::PRODUCT_FORCE_DESTROY->name => 'Product Force Destroy',

        PermissionName::PACKAGE_INDEX->name => 'Package Index',
        PermissionName::PACKAGE_STORE->name => 'Package Store',
        PermissionName::PACKAGE_SHOW->name => 'Package Show',
        PermissionName::PACKAGE_UPDATE->name => 'Package Update',
        PermissionName::PACKAGE_DESTROY->name => 'Package Destroy',

        PermissionName::VARIATION_INDEX->name => 'Variation Index',
        PermissionName::VARIATION_SHOW->name => 'Variation Show',
        PermissionName::VARIATION_STORE->name => 'Variation Store',
        PermissionName::VARIATION_UPDATE->name => 'Variation Update',
        PermissionName::VARIATION_DESTROY->name => 'Variation Destroy',

        PermissionName::PAYMENT_INDEX->name => 'Payment Index',
        PermissionName::PAYMENT_STORE->name => 'Payment Store',
        PermissionName::PAYMENT_SHOW->name => 'Payment Show',
        PermissionName::PAYMENT_UPDATE->name => 'Payment Update',
        PermissionName::PAYMENT_DESTROY->name => 'Payment Destroy',
        PermissionName::PAYMENT_TRASHED->name => 'Payment Trashed',
        PermissionName::PAYMENT_RESTORE->name => 'Payment Restore',
        PermissionName::PAYMENT_FORCE_DESTROY->name => 'Payment Force Destroy',

        PermissionName::ORDER_INDEX->name => 'Order Index',
        PermissionName::ORDER_STORE->name => 'Order Store',
        PermissionName::ORDER_SHOW->name => 'Order Show',
        PermissionName::ORDER_UPDATE->name => 'Order Update',
        PermissionName::ORDER_DESTROY->name => 'Order Destroy',
        PermissionName::ORDER_TRASHED->name => 'Order Trashed',
        PermissionName::ORDER_RESTORE->name => 'Order Restore',
        PermissionName::ORDER_FORCE_DESTROY->name => 'Order Force Destroy',

        PermissionName::CART_INDEX->name => 'Cart Index',
        PermissionName::CART_STORE->name => 'Cart Store',
        PermissionName::CART_SHOW->name => 'Cart Show',
        PermissionName::CART_UPDATE->name => 'Cart Update',
        PermissionName::CART_DESTROY->name => 'Cart Destroy',
        PermissionName::CART_TRASHED->name => 'Cart Trashed',
        PermissionName::CART_RESTORE->name => 'Cart Restore',
        PermissionName::CART_FORCE_DESTROY->name => 'Cart Force Destroy',

        PermissionName::CONTINENT_INDEX->name => 'Continent Index',
        PermissionName::CONTINENT_SHOW->name => 'Continent Show',
        PermissionName::CONTINENT_STORE->name => 'Continent Store',
        PermissionName::CONTINENT_UPDATE->name => 'Continent Update',
        PermissionName::CONTINENT_DESTROY->name => 'Continent Destroy',

        PermissionName::COUNTRY_INDEX->name => 'Country Index',
        PermissionName::COUNTRY_SHOW->name => 'Country Show',
        PermissionName::COUNTRY_STORE->name => 'Country Store',
        PermissionName::COUNTRY_UPDATE->name => 'Country Update',
        PermissionName::COUNTRY_DESTROY->name => 'Country Destroy',

        PermissionName::PROVINCE_INDEX->name => 'Province Index',
        PermissionName::PROVINCE_SHOW->name => 'Province Show',
        PermissionName::PROVINCE_STORE->name => 'Province Store',
        PermissionName::PROVINCE_UPDATE->name => 'Province Update',
        PermissionName::PROVINCE_DESTROY->name => 'Province Destroy',

        PermissionName::ADDRESS_INDEX->name => 'Address Index',
        PermissionName::ADDRESS_SHOW->name => 'Address Show',
        PermissionName::ADDRESS_STORE->name => 'Address Store',
        PermissionName::ADDRESS_UPDATE->name => 'Address Update',
        PermissionName::ADDRESS_DESTROY->name => 'Address Destroy',

        PermissionName::VOUCHER_INDEX->name => 'Voucher Index',
        PermissionName::VOUCHER_SHOW->name => 'Voucher Show',
        PermissionName::VOUCHER_STORE->name => 'Voucher Store',
        PermissionName::VOUCHER_UPDATE->name => 'Voucher Update',
        PermissionName::VOUCHER_DESTROY->name => 'Voucher Destroy',

        PermissionName::MEDIA_DESTROY->name => 'Media Destroy'
    ],
    RoleName::class => [
        RoleName::SUPER_ADMIN->name => 'Super Admin',
        RoleName::ADMIN->name => 'Admin',
        RoleName::USER->name => 'User'
    ],
];
