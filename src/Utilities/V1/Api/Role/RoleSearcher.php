<?php

namespace Callmeaf\Permission\Utilities\V1\Api\Role;

use Callmeaf\Base\Utilities\V1\Contracts\SearcherInterface;
use Illuminate\Database\Eloquent\Builder;

class RoleSearcher implements SearcherInterface
{
    public function apply(Builder $query, array $filters = []): void
    {
        $filters = collect($filters)->filter(fn($item) => strlen(trim($item)));
        $query->where(function (Builder $builder) use ($filters) {
            $searcherSubClassQueryFunction = config('callmeaf-base.searcher_subclass_query_function');
            if($value = $filters->get('name')) {
                $builder->{$searcherSubClassQueryFunction}('name','like',searcherLikeValue($value));
            }
            if($value = $filters->get('name_fa')) {
                $builder->{$searcherSubClassQueryFunction}('name_fa','like',searcherLikeValue($value));
            }
        });

    }
}
