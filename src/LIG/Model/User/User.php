<?php

namespace LIG\Model\User;

class User implements UserInterface
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

    public static function getType(){}
}
