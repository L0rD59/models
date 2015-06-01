<?php

namespace LIG\Model\Contact;

interface ContactValueInterface extends \Serializable
{
    /**
     * Get value of contact
     *
     * @return mixed
     */
    public function getValue();

    public function setValue($value);
}