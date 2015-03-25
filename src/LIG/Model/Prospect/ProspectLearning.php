<?php

namespace LIG\Model\Prospect;

use Doctrine\Common\Collections\ArrayCollection;
use Sylius\Component\Attribute\Model\Attribute;

class ProspectLearning extends Prospect
{
    public function __construct(ContactCollection $contacts, $provider, OwnerInterface $owner)
    {
        parent::__construct($contacts, $provider, $owner);

        $this->setAttributes(new ArrayCollection());

        $studyLevelAttribute = new Attribute();
        $studyLevelAttribute->setName('study_level');
        $this->attributes->add($studyLevelAttribute);
    }
}
