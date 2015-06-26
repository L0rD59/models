<?php

namespace LIG\Entity\User;

use LIG\Model\User\UserAdministratorInterface;
use LIG\Model\User\UserAdministratorTrait;

/**
 * @Entity
 */
class UserAdministrator extends User implements UserAdministratorInterface
{
    use UserAdministratorTrait;
}