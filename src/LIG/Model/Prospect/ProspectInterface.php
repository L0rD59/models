<?php

namespace LIG\Model\Prospect;

interface ProspectInterface
{
    /**
     * Sets the email.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email);

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail();

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

    /**
     * Sets the date of birth.
     *
     * @param \DateTime $birthday
     *
     * @return self
     */
    public function setBirthday($birthday);

    /**
     * Get birthday.
     *
     * @return \Datetime
     */
    public function getBirthday();

}