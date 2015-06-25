<?php

namespace LIG\Entity\User;

use LIG\Model\User\UserEducationalInterface;
use LIG\Model\User\UserEducationalTrait;

/**
 * @Entity
 */
class UserEducational extends User implements UserEducationalInterface
{
    use UserEducationalTrait;
}