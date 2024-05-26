<?php

namespace Callmeaf\Permission\Events;

use Callmeaf\Permission\Models\Role;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RoleShowed
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public Role $role)
    {

    }
}
