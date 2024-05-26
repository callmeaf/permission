<?php

namespace Callmeaf\Permission\Events;

use Callmeaf\Permission\Models\Permission;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PermissionIndexed
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public Permission $permission)
    {

    }
}
