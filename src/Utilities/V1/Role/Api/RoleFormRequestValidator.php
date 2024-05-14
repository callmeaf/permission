<?php

namespace Callmeaf\Permission\Utilities\V1\Role\Api;


use Callmeaf\Base\Utilities\V1\FormRequestValidator;

class RoleFormRequestValidator extends FormRequestValidator
{
    public function index(): array
    {
        return [
            'name' => false,
            'name_fa' => false,
        ];
    }

    public function store(): array
    {
        return [
            'name' => true,
            'name_fa' => true,
        ];
    }

    public function show(): array
    {
        return [

        ];
    }

    public function update(): array
    {
        return [
            'name' => true,
            'name_fa' => true,
        ];
    }

    public function destroy(): array
    {
        return [];
    }

    public function syncPermissions(): array
    {
        return [
            'permissions_ids' => false,
            'permissions_ids.*' => true,
        ];
    }
}
