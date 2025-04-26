<?php

namespace Callmeaf\Permission\App\Http\Resources\Web\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @extends ResourceCollection<PermissionResource>
 */
class PermissionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, PermissionResource>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
