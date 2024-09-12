<?php

namespace Callmeaf\Permission\Utilities\V1\Permission\Api;

use Callmeaf\Base\Utilities\V1\Resources;

class PermissionResources extends Resources
{
    public function index(): self
    {
        $this->data = [
            'relations' => [],
            'columns' => [
                'id',
                'name',
            ],
            'attributes' => [
                'id',
                'name',
                'name_text',
            ],
        ];
        return $this;
    }

    public function show(): self
    {
        $this->data = [
            'relations' => [
                'roles',
            ],
            'attributes' => [
                'id',
                'name',
                'name_text',
                'roles',
                '!roles' => [
                    'id',
                    'name',
                    'name_fa',
                    'name_full',
                ],
            ],
        ];
        return $this;
    }
}
