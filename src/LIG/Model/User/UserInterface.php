<?php

namespace LIG\Model\User;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;

interface UserInterface extends AdvancedUserInterface
{
	/**
	 * Gets type.
	 * 
	 * @return string
	 */
	public static function getType();

}