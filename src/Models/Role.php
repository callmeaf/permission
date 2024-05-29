<?php

namespace Callmeaf\Permission\Models;

use Callmeaf\Base\Contracts\HasEnum;
use Callmeaf\Base\Contracts\HasResponseTitles;
use Callmeaf\Base\Traits\HasDate;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Role extends \Spatie\Permission\Models\Role implements HasResponseTitles,HasEnum
{
    use HasDate;
    protected $guarded = false;
    protected $fillable = [
        'name',
        'name_fa',
        'guard_name',
    ];

    public function fullName(): Attribute
    {
        return Attribute::get(
            fn() => $this->name . ' - ' . $this->name_fa,
        );
    }


    public function responseTitles(string $key,string $default = ''): string
    {
        return [
            'store' => $this->fullName ?? $default,
            'update' => $this->fullName ?? $default,
            'status_update' => $this->fullName ?? $default,
            'destroy' => $this->fullName ?? $default,
            'restore' => $this->fullName ?? $default,
            'force_destroy' => $this->fullName ?? $default,
            'sync_permissions' => $this->fullName ?? $default,
        ][$key];
    }

    public static function enumsLang(): array
    {
        return __('callmeaf-permission::enums');
    }
}
