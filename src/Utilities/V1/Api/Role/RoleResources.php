<?php

namespace Callmeaf\Permission\Utilities\V1\Api\Role;

use Callmeaf\Base\Utilities\V1\Resources;

class RoleResources extends Resources
{
    public function index(): self
    {
        $this->data = [
            'relations' => [],
            'columns' => [
                'id',
                'name',
                'name_fa',
                'created_at',
                'updated_at',
            ],
            'attributes' => [
                'id',
                'name',
                'name_fa',
                'created_at_text',
                'updated_at_text',
            ],
        ];
        return $this;
    }

    public function store(): self
    {
        $this->data = [
            'relations' => [],
            'attributes' => [
                'id',
                'name',
                'name_fa',
                'created_at_text',
                'updated_at_text',
            ],
        ];
        return $this;
    }

    public function show(): self
    {
        $this->data = [
            'relations' => [],
            'attributes' => [
                'id',
                'name',
                'name_fa',
                'created_at_text',
                'updated_at_text',
            ],
        ];
        return $this;
    }

    public function update(): self
    {
        $this->data = [
            'relations' => [],
            'attributes' => [
                'id',
                'name',
                'name_fa',
                'created_at_text',
                'updated_at_text',
            ],
        ];
        return $this;
    }

    public function destroy(): self
    {
        $this->data = [
            'relations' => [],
            'attributes' => [
                'id',
                'name',
                'name_fa',
                'created_at_text',
                'updated_at_text',
            ],
        ];
        return $this;
    }

    public function syncPermissions(): self
    {
        $this->data = [
            'relations' => [],
            'attributes' => [
                'id',
                'name',
                'name_fa',
                'created_at_text',
                'updated_at_text',
            ],
        ];
        return $this;
    }
}
