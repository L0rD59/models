<?php

namespace LIG\Model\Contact\Stubs;

use LIG\Model\Contact\AbstractContact;
use LIG\Model\Contact\AddressContactInterface;
use LIG\Model\Contact\ContactOwnerInterface;
use Sylius\Component\Addressing\Model\AddressInterface;

class AddressContact extends AbstractContact implements AddressContactInterface
{
    public function __construct($name, ContactOwnerInterface $owner, $address)
    {
        parent::__construct($name, $owner, $address);
    }

    public function setValue($address)
    {
        if(!($address instanceof AddressInterface))
        {
            throw new \InvalidArgumentException('Invalid Address expected AddressInterface'.(is_object($address) ? ' '.get_class($address).' given' : ''));
        }

        $this->value = $address;
    }
}
