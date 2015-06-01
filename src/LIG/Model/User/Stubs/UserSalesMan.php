<?php

namespace LIG\Model\User\Stubs;

use LIG\Model\User\User;
use LIG\Model\User\UserSalesManTrait;

/**
 * @MappedSuperclass
 */
class UserSalesMan extends User
{
    use UserSalesManTrait;
}
