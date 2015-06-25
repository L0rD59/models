<?php

namespace LIG\Entity\User;

use LIG\Model\User\UserSalesManagerTrait;
use LIG\Model\User\UserSalesManagerInterface;

/**
 * @Entity
 */
class UserSalesManager extends User implements UserSalesManagerInterface
{
    use UserSalesManagerTrait;
}