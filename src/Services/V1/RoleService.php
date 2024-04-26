<?php

namespace Callmeaf\Permission\Services\V1;

use Callmeaf\Base\Services\V1\BaseService;
use Callmeaf\Permission\Models\Permission;
use Callmeaf\Permission\Services\V1\Contracts\RoleServiceInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RoleService extends BaseService implements RoleServiceInterface
{
    public function __construct(?Builder $query = null, ?Model $model = null, ?Collection $collection = null, ?JsonResource $resource = null, ?ResourceCollection $resourceCollection = null, array $defaultData = [],?string $searcher = null)
    {
        parent::__construct($query, $model, $collection, $resource, $resourceCollection, $defaultData,$searcher);
        $this->query = app(config('callmeaf-role.model'))->query();
        $this->resource = config('callmeaf-role.model_resource');
        $this->resourceCollection = config('callmeaf-role.model_resource_collection');
        $this->defaultData = config('callmeaf-role.default_values');
        $this->searcher = config('callmeaf-role.searcher');
    }

    public function syncPermissions(iterable|Permission|int|string|null $permissions = []): RoleService
    {
        if(!is_iterable($permissions)) {
            $permissions = is_null($permissions) ? [] : [$permissions];
        }
        foreach ($permissions as $key => $permission) {
            if(!($permission instanceof Permission)) {
                continue;
            }
            $permissions[$key] = $permission->id;
        }
        $this->model->permissions()->sync($permissions);
        $this->freshModel();
        return $this;
    }
}
