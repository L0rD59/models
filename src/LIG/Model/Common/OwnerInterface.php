<?php

namespace LIG\Model\Common;

interface OwnerInterface
{
    /**
     * Sets the firstname.
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname($firstname);

    /**
     * Get firstname.
     *
     * @return string
     */
    public function getFirstname();

    /**
     * Sets the lastname.
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname($lastname);

    /**
     * Get lastname.
     *
     * @return string
     */
    public function getLastname();
}