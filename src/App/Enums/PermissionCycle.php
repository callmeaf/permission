<?php

namespace Callmeaf\Permission\App\Enums;

enum PermissionCycle: string
{
    case INDEX = 'index';
    case STORE = 'store';
    case SHOW = 'show';
    case UPDATE = 'update';
    case DESTROY = 'destroy';
    case RESTORE = 'restore';
    case TRASHED = 'trashed';
    case FORCE_DESTROY = 'forceDestroy';
    case IMPORT = 'import';
    case EXPORT = 'export';
}
