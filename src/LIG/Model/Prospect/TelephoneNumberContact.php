<?php

namespace LIG\Model\Prospect;

class TelephoneNumberContact extends AbstractContact
{
    const __TYPE__ = 'telephone_number';

    /** @var  string $telephoneNumber */
    protected $telephoneNumber;

    public function __construct($telephoneNumber)
    {
        $this->setTelephoneNumber($telephoneNumber);
    }

    public function getType()
    {
        return self::__TYPE__;
    }

    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }

    public function setTelephoneNumber($telephoneNumber)
    {
        $this->telephoneNumber = $telephoneNumber;

        return $this;
    }

    public function serialize()
    {
        return serialize($this->telephoneNumber);
    }
}
