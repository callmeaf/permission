<?php

namespace Callmeaf\Permission\Events;

use Callmeaf\Permission\Models\Role;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Queue\SerializesModels;

class RoleIndexed
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public LengthAwarePaginator|Collection|\Illuminate\Support\Collection|null $roles)
    {

    }
}
