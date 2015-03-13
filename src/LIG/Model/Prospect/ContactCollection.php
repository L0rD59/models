<?php

namespace LIG\Model\Prospect;

use Doctrine\Common\Collections\ArrayCollection;

class ContactCollection extends ArrayCollection
{
    public function __construct(array $contacts)
    {
        if(!count($contacts)){
            throw new \Exception('ContactCollection cannot be empty');
        }

        array_walk($contacts, function ($contact, $i) {
            if (!$contact instanceof AbstractContact) {
                throw new \Exception('Invalid item (#'.$i.') in ContactCollection expected instance of AbstractContact');
            }
        });

        parent::__construct($contacts);
    }

    public function add($contact)
    {
        if(!$contact instanceof AbstractContact){
            throw new \Exception('Invalid contact');
        }

        return parent::add($contact);
    }

    public function hasContact()
    {
        return $this->count() && !$this->isEmpty();
    }
}
