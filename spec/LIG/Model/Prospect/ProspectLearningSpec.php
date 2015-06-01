<?php

namespace spec\LIG\Model\Prospect;

use LIG\Model\Contact\ContactCollection;
use LIG\Model\Contact\ContactInterface;
use LIG\Model\Prospect\ProspectOwnerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProspectLearningSpec extends ObjectBehavior
{
    public function let(ContactCollection $contactCollection, ContactInterface $contact, $provider, ProspectOwnerInterface $owner)
    {
        $contactCollection->beConstructedWith(array(array($contact->getWrappedObject()), $owner->getWrappedObject()));

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
