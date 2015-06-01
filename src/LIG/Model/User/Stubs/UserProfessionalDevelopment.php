<?php

namespace LIG\Model\User\Stubs;

use LIG\Model\User\User;
use LIG\Model\User\UserProfessionalDevelopmentTrait;

/**
 * @MappedSuperclass
 */
class UserProfessionalDevelopment extends User
{
    use UserProfessionalDevelopmentTrait;
}
