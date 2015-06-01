<?php

namespace LIG\Model\Prospect;

use LIG\Model\Common\OwnerInterface;

interface ProspectInterface extends OwnerInterface
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