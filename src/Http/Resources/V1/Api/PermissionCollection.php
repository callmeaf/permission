<?php

namespace Callmeaf\Permission\Http\Resources\V1\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PermissionCollection extends ResourceCollection
{
    public function __construct($resource,protected array|int $only = [])
    {
        parent::__construct($resource);
    }

    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->map(fn($permission) => toArrayResource(data: [
                'id' => fn() => $permission->id,
                'name' => fn() => $permission->name,
                'name_text' => fn() => $permission->nameText,
            ],only: $this->only)),
        ];
    }
}
