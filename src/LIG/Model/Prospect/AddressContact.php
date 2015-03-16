<?php

namespace LIG\Model\Prospect;

use Sylius\Component\Addressing\Model\Address;

class AddressContact extends AbstractContact
{
    const __TYPE__ = 'address';

    /** @var Sylius\Component\Addressing\Model\Address $address */
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
