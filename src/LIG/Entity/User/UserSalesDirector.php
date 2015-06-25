<?php

namespace LIG\Entity\User;

use LIG\Model\User\UserSalesDirectorInterface;
use LIG\Model\User\UserSalesDirectorTrait;

/**
 * @Entity
 */
class UserSalesDirector extends User implements UserSalesDirectorInterface
{
    use UserSalesDirectorTrait;
}