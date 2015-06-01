<?php

namespace LIG\Model\Contact\Stubs;

use LIG\Model\Contact\AbstractContact;
use LIG\Model\Contact\ContactOwnerInterface;
use LIG\Model\Contact\TelephoneNumberContactInterface;

class TelephoneNumberContact extends AbstractContact implements TelephoneNumberContactInterface
{
    public function __construct($name, ContactOwnerInterface $owner, $telephoneNumber)
    {
        parent::__construct($name, $owner, $telephoneNumber);
    }
}
