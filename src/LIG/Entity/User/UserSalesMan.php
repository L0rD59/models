<?php

namespace LIG\Entity\User;

use LIG\Model\User\UserSalesManInterface;
use LIG\Model\User\UserSalesManTrait;

/**
 * @Entity
 */
class UserSalesMan extends User implements UserSalesManInterface
{
    use UserSalesManTrait;
}