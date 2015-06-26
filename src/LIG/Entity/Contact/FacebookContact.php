<?php

namespace LIG\Entity\Contact;

use LIG\Model\Contact\AbstractContact;
use LIG\Model\Contact\FacebookContactInterface;
use LIG\Model\Contact\FacebookContactTrait;

/**
 * @Entity
 */
class FacebookContact extends AbstractContact implements FacebookContactInterface
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

//    use FacebookContactTrait;
}