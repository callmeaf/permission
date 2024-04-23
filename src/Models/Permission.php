<?php

namespace Callmeaf\Permission\Models;

use Callmeaf\Base\Contracts\HasEnum;
use Callmeaf\Permission\Enums\PermissionName;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Permission extends \Spatie\Permission\Models\Permission implements HasEnum
{
    protected $guarded = false;
    protected $fillable = [
        'name',
        'guard_name',
    ];

    public function nameText(): Attribute
    {
        return Attribute::get(
            fn() => enumTranslator(PermissionName::tryFrom($this->name),self::enumsLang())
        );
    }

    public static function enumsLang(array $replace = [],?string $locale = null): array
    {
        return __(key: 'callmeaf-permission::enums',replace: $replace,locale: $locale);
    }
}
