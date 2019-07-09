<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class OfficeAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'office.create',
        Tokens::PERMISSION_UPDATE => 'office.update',
        Tokens::PERMISSION_SHOW   => 'office.show',
        Tokens::PERMISSION_REMOVE => 'office.remove',
    ];
}
