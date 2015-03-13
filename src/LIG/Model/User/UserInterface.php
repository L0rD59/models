<?php

namespace LIG\Model\User;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;

interface UserInterface extends AdvancedUserInterface
{
//	const TYPE = 'User';
//	const ROLE = 'ROLE_USER';
//
	/**
	 * Gets type.
	 * 
	 * @return string
	 */
	public static function getType();
	
//	/**
//	 * Gets role.
//	 *
//	 * @return string
//	 */
//	public static function getRole();
//
//	/**
//	 * Gets firstname.
//	 *
//	 * @return string
//	 */
//	public function getFirstname();
//
//	/**
//	 * Sets firstname.
//	 *
//	 * @param string $firstname
//	 *
//	 * @return null
//	 */
//	public function setFirstname($firstname);
//
//	/**
//	 * Gets lastname.
//	 *
//	 * @return string
//	 */
//	public function getLastname();
//
//	/**
//	 * Sets latname.
//	 *
//	 * @param string $lastname
//	 *
//	 * @return null
//	 */
//	public function setLastname($lastname);
}