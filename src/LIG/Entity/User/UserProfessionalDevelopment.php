<?php

namespace LIG\Entity\User;

use LIG\Model\User\UserProfessionalDevelopmentInterface;
use LIG\Model\User\UserProfessionalDevelopmentTrait;

/**
 * @Entity
 */
class UserProfessionalDevelopment extends User implements UserProfessionalDevelopmentInterface
{
    use UserProfessionalDevelopmentTrait;
}