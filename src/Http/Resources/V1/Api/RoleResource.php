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
            'permissions' => fn() => $this->permissions->count() ? new (config('callmeaf-permission.model_resource_collection'))($this->permissions,only: $this->only['!permissions'] ?? []) : null,
        ],only: $this->only);
    }
}
