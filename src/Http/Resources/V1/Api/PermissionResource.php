<?php

namespace Callmeaf\Permission\Http\Resources\V1\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PermissionResource extends JsonResource
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
            'name_text' => fn() => $this->nameText,
            'roles' => fn() => $this->roles->count() ? new (config('callmeaf-role.model_resource_collection'))($this->roles,only: $this->only['!roles'] ?? []) : null
        ],only: $this->only);
    }
}
