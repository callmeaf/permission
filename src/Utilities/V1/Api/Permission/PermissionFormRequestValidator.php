<?php

namespace Callmeaf\Permission\Utilities\V1\Api\Permission;


use Callmeaf\Base\Utilities\V1\FormRequestValidator;

class PermissionFormRequestValidator extends FormRequestValidator
{
    public function index(): array
    {
        return [
            'name' => false,
        ];
    }

    public function show(): array
    {
        return [

        ];
    }
}
