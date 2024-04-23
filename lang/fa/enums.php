<?php

use Callmeaf\Permission\Enums\PermissionName;

return [
    PermissionName::class => [
        PermissionName::USER_INDEX->name => 'لیست کاربران',
        PermissionName::USER_STORE->name => 'ایجاد کاربر',
        PermissionName::USER_UPDATE->name => 'ویرایش کاربر',
        PermissionName::USER_DESTROY->name => 'حذف موقت کاربر',
        PermissionName::USER_TRASHED->name => 'زباله دان کاربران',
        PermissionName::USER_RESTORE->name => 'بازگردانی کاربر',
        PermissionName::USER_FORCE_DESTROY->name => 'حذف دائم کاربر',
        PermissionName::ROLE_INDEX->name => 'لیست نقش ها',
        PermissionName::ROLE_STORE->name => 'ایجاد نقش',
        PermissionName::ROLE_UPDATE->name => 'ویرایش نقش',
        PermissionName::ROLE_DESTROY->name => 'حذف دائم نقش',
        PermissionName::PERMISSION_INDEX->name => 'لیست سطخ دسترسی ها',
    ],
];
