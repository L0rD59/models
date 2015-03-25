<?php

namespace spec\LIG\Model\Prospect;

use Doctrine\Common\Collections\ArrayCollection;
use LIG\Model\Prospect\ContactCollection;
use LIG\Model\Prospect\EmailContact;
use LIG\Model\Prospect\OwnerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Sylius\Component\Attribute\Model\Attribute;

class ProspectLearningSpec extends ObjectBehavior
{
    public function let(ContactCollection $contactCollection, EmailContact $emailContact, $provider, OwnerInterface $owner)
    {
        $contactCollection->beConstructedWith(array(array($emailContact->getWrappedObject())));

        $this->beConstructedWith($contactCollection->getWrappedObject(), $provider, $owner->getWrappedObject());
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Prospect\ProspectLearning');
        $this->shouldBeAnInstanceOf('LIG\Model\Prospect\Prospect');
    }

    function it_should_have_a_unique_study_level_attribute()
    {
        $this->hasAttributeByName('study_level')->shouldReturn(true);

        $this->getAttributeByName('study_level')->count()->shouldReturn(1);
    }
}
