<?php

namespace Callmeaf\Permission\App\Models;

use Callmeaf\Base\App\Models\BaseModel;
use Callmeaf\Base\App\Models\Contracts\BaseConfigurable;
use Callmeaf\Base\App\Traits\Model\BaseModelMethods;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends \Spatie\Permission\Models\Permission implements BaseConfigurable
{
    use BaseModelMethods;

    public static function configKey(): string
    {
        return 'callmeaf-permission';
    }

    protected function casts(): array
    {
        return [
            ...(self::config()['enums'] ?? []),
        ];
    }
}
