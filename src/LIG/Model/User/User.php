<?php

namespace LIG\Model\User;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;

class User implements AdvancedUserInterface
{
    public function isAccountNonExpired(){}

    public function isAccountNonLocked(){}

    public function isCredentialsNonExpired(){}

    public function isEnabled(){}

    public function getRoles(){}

    public function getPassword(){}

    public function getSalt(){}

    public function getUsername(){}

    public function eraseCredentials(){}
}
