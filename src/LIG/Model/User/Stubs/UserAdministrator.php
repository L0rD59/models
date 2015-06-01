<?php

namespace LIG\Model\User\Stubs;

use LIG\Model\User\User;
use LIG\Model\User\UserAdministratorTrait;

/**
 * @MappedSuperclass
 */
class UserAdministrator extends User
{
    use UserAdministratorTrait;
}
