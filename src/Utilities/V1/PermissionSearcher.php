<?php

namespace Callmeaf\Permission\Utilities\V1;

use Callmeaf\Base\Utilities\V1\Contracts\SearcherInterface;
use Illuminate\Database\Eloquent\Builder;

class PermissionSearcher implements SearcherInterface
{
    public function apply(Builder $query, array $filters = []): void
    {
        $filters = collect($filters)->filter(fn($item) => strlen(trim($item)));
        if($value = $filters->get('name')) {
            $query->where('name','like',searcherLikeValue($value));
        }
        if($value = $filters->get('name_fa')) {
            $query->where('name_fa','like',searcherLikeValue($value));
        }
    }
}
