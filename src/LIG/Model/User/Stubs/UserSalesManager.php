<?php

namespace LIG\Model\User\Stubs;

use LIG\Model\User\User;
use LIG\Model\User\UserSalesManagerTrait;

/**
 * @MappedSuperclass
 */
class UserSalesManager extends User
{
    use UserSalesManagerTrait;
}
