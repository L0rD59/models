<?php

namespace LIG\Model\User;

/**
 * #MappedSuperclass
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="type", type="string")
 * @DiscriminatorMap({
 *   "" = "User",
 *   "administrator" = "UserAdministrator",
 *   "educational" = "UserEducational",
 *   "professional_development" = "UserProfessionalDevelopment",
 *   "sales_director" = "UserSalesDirector",
 *   "sales_manager" = "UserSalesManager",
 *   "sales_man" = "UserSalesMan"
 * })
 */
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
