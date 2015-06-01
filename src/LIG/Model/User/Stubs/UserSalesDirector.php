<?php

namespace LIG\Model\User\Stubs;

use LIG\Model\User\User;
use LIG\Model\User\UserSalesDirectorTrait;

/**
 * @MappedSuperclass
 */
class UserSalesDirector extends User
{
    use UserSalesDirectorTrait;
}
