<?php

namespace LIG\Model\Contact\Stubs;

use LIG\Model\Contact\AbstractContact;
use LIG\Model\Contact\EmailContactInterface;
use LIG\Model\Contact\ContactOwnerInterface;

class EmailContact extends AbstractContact implements EmailContactInterface
{
    /**
     * @var string $email
     */
    protected $email;


    public function __construct($name, ContactOwnerInterface $owner, $email)
    {
        parent::__construct($name, $owner, $email);
    }

}