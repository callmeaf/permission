<?php

namespace Callmeaf\Permission\Http\Resources\V1\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RoleCollection extends ResourceCollection
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
            'data' => $this->collection->map(fn($role) => toArrayResource(data: [
                'id' => fn() => $role->id,
                'name' => fn() => $role->name,
                'name_fa' => fn() => $role->name_fa,
                'created_at' => fn() => $role->created_at,
                'created_at_text' => fn() => $role->createdAtText,
                'updated_at' => fn() => $role->updated_at,
                'updated_at_text' => fn() => $role->updatedAtText,
            ],only: $this->only)),
        ];
    }
}
