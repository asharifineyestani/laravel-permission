<?php

namespace Spatie\Permission\Exceptions;

use InvalidArgumentException;

class WildcardPermissionNotProperlyFormatted extends InvalidArgumentException
{
    public static function create(string $permission): WildcardPermissionNotProperlyFormatted
    {
        return new static("Wildcard permission `{$permission}` is not properly formatted.");
    }
}
