<?php

namespace Callmeaf\Permission\App\Repo\Contracts;

use Callmeaf\Base\App\Repo\Contracts\BaseRepoInterface;
use Callmeaf\Permission\App\Models\Permission;
use Callmeaf\Permission\App\Http\Resources\Api\V1\PermissionCollection;
use Callmeaf\Permission\App\Http\Resources\Api\V1\PermissionResource;

/**
 * @extends BaseRepoInterface<Permission,PermissionResource,PermissionCollection>
 */
interface PermissionRepoInterface extends BaseRepoInterface
{

}
