<?php

namespace Callmeaf\Permission\Models;

use Callmeaf\Base\Contracts\HasResponseTitles;
use Callmeaf\Base\Traits\HasDate;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Role extends \Spatie\Permission\Models\Role implements HasResponseTitles
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


    public function responseTitles(string $key): string
    {
        return [
            'store' => $this->fullName,
            'update' => $this->fullName,
            'status_update' => $this->fullName,
            'destroy' => $this->fullName,
            'restore' => $this->fullName,
            'force_destroy' => $this->fullName,
        ][$key];
    }
}
