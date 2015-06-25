<?php

namespace LIG\Entity\User;

use LIG\Model\User\User as ModelUser;

/**
 * @Entity
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
class User extends ModelUser
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
}