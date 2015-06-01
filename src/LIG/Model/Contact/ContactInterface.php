<?php

namespace LIG\Model\Contact;

interface ContactInterface extends \Serializable
{
    public function __construct($name, ContactOwnerInterface $owner, $value);

    /**
     * Get name of contact
     *
     * @return string
     */
    public function getName();

    /**
     * Set name of contact
     *
     * @param $name
     *
     * @return mixed
     */
    public function setName($name);

    /**
     * Get value of contact
     *
     * @return mixed
     */
    public function getValue();

    public function setValue($value);
}