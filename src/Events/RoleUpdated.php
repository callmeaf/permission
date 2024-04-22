<?php

namespace Callmeaf\Permission\Events;

use Callmeaf\Permission\Models\Role;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RoleUpdated
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public Role $role)
    {

    }
}
