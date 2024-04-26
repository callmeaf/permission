<?php

namespace Callmeaf\Permission\Http\Resources\V1\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
{
    public function __construct($resource,protected array|int $only = [])
    {
        parent::__construct($resource);
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return toArrayResource(data: [
            'id' => fn() => $this->id,
            'name' => fn() => $this->name,
            'name_fa' => fn() => $this->name_fa,
            'full_name' => fn() => $this->fullName,
            'created_at' => fn() => $this->created_at,
            'created_at_text' => fn() => $this->createdAtText,
            'updated_at' => fn() => $this->updated_at,
            'updated_at_text' => fn() => $this->updatedAtText,
            'permissions_ids' => fn() => $this->permissions()->pluck('id'),
            'permissions' => fn() => new PermissionCollection($this->permissions,only: $this->only['!permissions'] ?? [])
        ],only: $this->only);
    }
}
