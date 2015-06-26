<?php

namespace LIG\Entity\Contact;

use LIG\Model\Contact\AbstractContact;
use LIG\Model\Contact\TelephoneNumberContactInterface;
use LIG\Model\Contact\TelephoneNumberContactTrait;

/**
 * @Entity
 */
class TelephoneNumberContact extends AbstractContact implements TelephoneNumberContactInterface
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

//    use TelephoneNumberContactTrait;
}