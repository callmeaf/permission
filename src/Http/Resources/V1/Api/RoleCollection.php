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
            'data' => $this->collection->map(fn($user) => toArrayResource(data: [
                'id' => fn() => $user->id,
                'name' => fn() => $user->name,
                'name_fa' => fn() => $user->name_fa,
                'created_at' => fn() => $user->created_at,
                'created_at_text' => fn() => $user->createdAtText,
                'updated_at' => fn() => $user->updated_at,
                'updated_at_text' => fn() => $user->updatedAtText,
            ],only: $this->only)),
        ];
    }
}
