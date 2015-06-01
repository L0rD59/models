<?php

namespace LIG\Model\User\Stubs;

use LIG\Model\User\User;
use LIG\Model\User\UserEducationalTrait;

/**
 * @MappedSuperclass
 */
class UserEducational extends User
{
    use UserEducationalTrait;
}
