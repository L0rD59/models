<?php

namespace LIG\Model\Contact;

use Doctrine\Common\Collections\ArrayCollection;
use LIG\Model\Common\OwnableInterface;
use LIG\Model\Common\OwnerInterface;

class ContactCollection extends ArrayCollection implements OwnableInterface
{
    /**
     * @var OwnerInterface $owner Propriétaire de la collection de contact
     */
    protected $owner;

    public function __construct(array $contacts, OwnerInterface $owner)
    {
        $this->owner = $owner;

        if(!count($contacts)){
            throw new \Exception('ContactCollection cannot be empty');
        }

        array_walk($contacts, function ($contact, $i) {
            if (!$contact instanceof ContactInterface) {
                throw new \Exception('Invalid item (#'.$i.') in ContactCollection expected instance of ContactInterface'.(is_object($contact) ? ' '.get_class($contact).' given' : ''));
            }
        });

        parent::__construct($contacts);
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner(OwnerInterface $owner)
    {
        $this->owner = $owner;

        return $this;
    }
    public function add($contact)
    {
        if(!$contact instanceof ContactInterface){
            throw new \Exception('Invalid contact');
        }

        return parent::add($contact);
    }

}
