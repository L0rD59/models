<?php

namespace LIG\Entity\Contact;

use LIG\Model\Contact\AbstractContact;
use LIG\Model\Contact\EmailContactInterface;
use LIG\Model\Contact\EmailContactTrait;

/**
 * @Entity
 */
class EmailContact extends AbstractContact implements EmailContactInterface
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

//    use EmailContactTrait;
}