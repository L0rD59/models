<?php

namespace LIG\Model\Contact;

use Sylius\Component\Addressing\Model\Address;

trait AddressContactTrait
{
    /**
     * @var \Sylius\Component\Addressing\Model\Address $address
     */
    protected $address;

    public function __construct(Address $address)
    {
        $this->address = $address;
    }

    public function serialize()
    {
        return serialize($this->address);
    }

    public function getAddress()
    {
        return $this->address;
    }
}
