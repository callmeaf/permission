<?php

namespace Callmeaf\Permission\Traits;

use Callmeaf\Permission\Enums\RoleName;
use Illuminate\Support\Facades\Log;

trait HasRoles
{
    use \Spatie\Permission\Traits\HasRoles;

    public function isSuperAdmin(): bool
    {
        return $this->hasRole(RoleName::SUPER_ADMIN->value);
    }

    public function isAdmin(): bool
    {
        return $this->hasRole(RoleName::ADMIN->value);
    }

    public function isSuperAdminOrAdmin(): bool
    {
        return $this->isSuperAdmin() && $this->isAdmin();
    }

    public function isUser(): bool
    {
        return $this->hasRole(RoleName::USER->value);
    }
}
