<?php

namespace LIG\Entity\Contact;

use LIG\Model\Contact\AbstractContact;
use LIG\Model\Contact\AddressContactInterface;
use LIG\Model\Contact\AddressContactTrait;

/**
 * @Entity
 */
class AddressContact extends AbstractContact implements AddressContactInterface
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

//    use AddressContactTrait;
}