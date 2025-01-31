<?php

use Callmeaf\Permission\Enums\PermissionName;
use Callmeaf\Permission\Enums\RoleName;

return [
    PermissionName::class => [
        PermissionName::USER_INDEX->name => 'لیست کاربران',
        PermissionName::USER_STORE->name => 'ایجاد کاربر',
        PermissionName::USER_SHOW->name => 'نمایش کاربر',
        PermissionName::USER_UPDATE->name => 'ویرایش کاربر',
        PermissionName::USER_DESTROY->name => 'حذف موقت کاربر',
        PermissionName::USER_TRASHED->name => 'زباله دان کاربران',
        PermissionName::USER_RESTORE->name => 'بازگردانی کاربر',
        PermissionName::USER_FORCE_DESTROY->name => 'حذف دائم کاربر',

        PermissionName::ROLE_INDEX->name => 'لیست نقش ها',
        PermissionName::ROLE_SHOW->name => 'نمایش نقش',
        PermissionName::ROLE_STORE->name => 'ایجاد نقش',
        PermissionName::ROLE_UPDATE->name => 'ویرایش نقش',
        PermissionName::ROLE_DESTROY->name => 'حذف دائم نقش',

        PermissionName::PERMISSION_INDEX->name => 'لیست سطح دسترسی ها',
        PermissionName::PERMISSION_SHOW->name => 'نمایش سطح دسترسی',

        PermissionName::PRODUCT_CATEGORY_INDEX->name => 'لیست دسته بندی محصولات',
        PermissionName::PRODUCT_CATEGORY_STORE->name => 'ایجاد دسته بندی محصول',
        PermissionName::PRODUCT_CATEGORY_SHOW->name => 'نمایش دسته بندی محصول',
        PermissionName::PRODUCT_CATEGORY_UPDATE->name => 'ویرایش دسته بندی محصول',
        PermissionName::PRODUCT_CATEGORY_DESTROY->name => 'حذف دسته بندی محصول',
        PermissionName::PRODUCT_CATEGORY_TRASHED->name => 'زباله‌دان دسته بندی محصولات',
        PermissionName::PRODUCT_CATEGORY_RESTORE->name => 'بازگردانی دسته بندی محصول',
        PermissionName::PRODUCT_CATEGORY_FORCE_DESTROY->name => 'حذف دائم دسته بندی محصول',

        PermissionName::PRODUCT_INDEX->name => 'لیست محصولات',
        PermissionName::PRODUCT_STORE->name => 'ایجاد محصول',
        PermissionName::PRODUCT_SHOW->name => 'نمایش محصول',
        PermissionName::PRODUCT_UPDATE->name => 'ویرایش محصول',
        PermissionName::PRODUCT_DESTROY->name => 'حذف محصول',
        PermissionName::PRODUCT_TRASHED->name => 'زباله‌دان محصولات',
        PermissionName::PRODUCT_RESTORE->name => 'بازگردانی محصول',
        PermissionName::PRODUCT_FORCE_DESTROY->name => 'حذف دائم محصول',

        PermissionName::PACKAGE_INDEX->name => 'لیست پکیج ها',
        PermissionName::PACKAGE_STORE->name => 'ایجاد پکیج',
        PermissionName::PACKAGE_SHOW->name => 'نمایش پکیج',
        PermissionName::PACKAGE_UPDATE->name => 'ویرایش پکیج',
        PermissionName::PACKAGE_DESTROY->name => 'حذف پکیج',

        PermissionName::VARIATION_INDEX->name => 'لیست متغیرها',
        PermissionName::VARIATION_SHOW->name => 'نمایش متغیر',
        PermissionName::VARIATION_STORE->name => 'ایجاد متغیر',
        PermissionName::VARIATION_UPDATE->name => 'ویرایش متغیر',
        PermissionName::VARIATION_DESTROY->name => 'حذف متغیر',

        PermissionName::PAYMENT_INDEX->name => 'لیست پرداخت‌ها',
        PermissionName::PAYMENT_STORE->name => 'ایجاد پرداخت',
        PermissionName::PAYMENT_SHOW->name => 'نمایش پرداخت',
        PermissionName::PAYMENT_UPDATE->name => 'ویرایش پرداخت',
        PermissionName::PAYMENT_DESTROY->name => 'حذف پرداخت',
        PermissionName::PAYMENT_TRASHED->name => 'زباله‌دان پرداخت‌ها',
        PermissionName::PAYMENT_RESTORE->name => 'بازگردانی پرداخت',
        PermissionName::PAYMENT_FORCE_DESTROY->name => 'حذف دائم پرداخت',

        PermissionName::ORDER_INDEX->name => 'لیست سفارشات',
        PermissionName::ORDER_STORE->name => 'ایجاد سفارش',
        PermissionName::ORDER_SHOW->name => 'نمایش سفارش',
        PermissionName::ORDER_UPDATE->name => 'ویرایش سفارش',
        PermissionName::ORDER_DESTROY->name => 'حذف سفارش',
        PermissionName::ORDER_TRASHED->name => 'زباله‌دان سفارشات',
        PermissionName::ORDER_RESTORE->name => 'بازگردانی سفارش',
        PermissionName::ORDER_FORCE_DESTROY->name => 'حذف دائم سفارش',

        PermissionName::CART_INDEX->name => 'لیست سبدهای خرید',
        PermissionName::CART_STORE->name => 'ایجاد سبد خرید',
        PermissionName::CART_SHOW->name => 'نمایش سبد خرید',
        PermissionName::CART_UPDATE->name => 'ویرایش سبد خرید',
        PermissionName::CART_DESTROY->name => 'حذف سبد خرید',
        PermissionName::CART_TRASHED->name => 'زباله‌دان سبدهای خرید',
        PermissionName::CART_RESTORE->name => 'بازگردانی سبد خرید',
        PermissionName::CART_FORCE_DESTROY->name => 'حذف دائم سبد خرید',

        PermissionName::CONTINENT_INDEX->name => 'لیست قاره‌ها',
        PermissionName::CONTINENT_SHOW->name => 'نمایش قاره',
        PermissionName::CONTINENT_STORE->name => 'ایجاد قاره',
        PermissionName::CONTINENT_UPDATE->name => 'ویرایش قاره',
        PermissionName::CONTINENT_DESTROY->name => 'حذف قاره',

        PermissionName::COUNTRY_INDEX->name => 'لیست کشورها',
        PermissionName::COUNTRY_SHOW->name => 'نمایش کشور',
        PermissionName::COUNTRY_STORE->name => 'ایجاد کشور',
        PermissionName::COUNTRY_UPDATE->name => 'ویرایش کشور',
        PermissionName::COUNTRY_DESTROY->name => 'حذف کشور',

        PermissionName::PROVINCE_INDEX->name => 'لیست استان‌ها',
        PermissionName::PROVINCE_SHOW->name => 'نمایش استان',
        PermissionName::PROVINCE_STORE->name => 'ایجاد استان',
        PermissionName::PROVINCE_UPDATE->name => 'ویرایش استان',
        PermissionName::PROVINCE_DESTROY->name => 'حذف استان',

        PermissionName::ADDRESS_INDEX->name => 'لیست آدرس‌ها',
        PermissionName::ADDRESS_SHOW->name => 'نمایش آدرس',
        PermissionName::ADDRESS_STORE->name => 'ایجاد آدرس',
        PermissionName::ADDRESS_UPDATE->name => 'ویرایش آدرس',
        PermissionName::ADDRESS_DESTROY->name => 'حذف آدرس',

        PermissionName::VOUCHER_INDEX->name => 'لیست کد تخفیف ها',
        PermissionName::VOUCHER_SHOW->name => 'نمایش کد تخفیف',
        PermissionName::VOUCHER_STORE->name => 'ایجاد کد تخفیف',
        PermissionName::VOUCHER_UPDATE->name => 'ویرایش کد تخفیف',
        PermissionName::VOUCHER_DESTROY->name => 'حذف کد تخفیف',

        PermissionName::MEDIA_DESTROY->name => 'حذف مدیا',
    ],
    RoleName::class => [
        RoleName::SUPER_ADMIN->name => 'مدیر کل',
        RoleName::ADMIN->name => 'مدیر',
        RoleName::USER->name => 'کاربر'
    ],
];
