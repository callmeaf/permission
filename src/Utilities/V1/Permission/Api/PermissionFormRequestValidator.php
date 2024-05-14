<?php

namespace Callmeaf\Permission\Utilities\V1\Permission\Api;


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
