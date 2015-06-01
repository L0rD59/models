<?php

namespace LIG\Model\Contact\Stubs;

use LIG\Model\Contact\AbstractContact;
use LIG\Model\Contact\FacebookContactInterface;
use LIG\Model\Contact\ContactOwnerInterface;

class FacebookContact extends AbstractContact implements FacebookContactInterface
{
    public function __construct($name, ContactOwnerInterface $owner, $fbId)
    {
        parent::__construct($name, $owner, $fbId);
    }
}
