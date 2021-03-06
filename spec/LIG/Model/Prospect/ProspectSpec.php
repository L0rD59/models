<?php

namespace spec\LIG\Model\Prospect;

use Doctrine\Common\Collections\ArrayCollection;
use LIG\Model\Contact\ContactCollection;
use LIG\Model\Contact\ContactInterface;
use LIG\Model\Prospect\ProspectOwnerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;


class ProspectSpec extends ObjectBehavior
{
    public function let(ContactCollection $contactCollection, ContactInterface $contact, $provider, ProspectOwnerInterface $owner)
    {
        $contactCollection->beConstructedWith(array(array($contact->getWrappedObject()), $owner->getWrappedObject()));

        $this->beConstructedWith($contactCollection->getWrappedObject(), $provider, $owner->getWrappedObject());
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Prospect\Prospect');
    }

    function it_should_have_collection_of_contacts()
    {
        $this->getContacts()->shouldImplement('Doctrine\Common\Collections\Collection');
    }

    function it_could_have_a_muteable_firstname($firstname)
    {
        $this->getFirstname()->shouldReturn(null);
        $this->setFirstname($firstname);
        $this->getFirstname()->shouldReturn($firstname);
    }

    function it_could_have_a_muteable_lastname($lastname)
    {
        $this->getLastname()->shouldReturn(null);
        $this->setLastname($lastname);
        $this->getLastname()->shouldReturn($lastname);
    }

    function it_could_have_a_muteable_birthday(\DateTime $birthday)
    {
        $this->getBirthday()->shouldReturn(null);
        $this->setBirthday($birthday);
        $this->getBirthday()->shouldReturn($birthday);
    }

    function it_could_have_a_muteable_geocode($geocode)
    {
        $this->getGeocode()->shouldBeNull();
        $this->setGeocode($geocode);
        $this->getGeocode()->shouldReturn($geocode);
    }

    function it_should_have_a_muteable_provider($provider)
    {
        $this->getProvider()->shouldNotBe(null);
        $this->setProvider($provider)->getProvider()->shouldBe($provider);
    }

    function it_should_have_a_muteable_owner(ProspectOwnerInterface $owner)
    {
        $this->getOwner()->shouldNotBe(null);
        $this->setOwner($owner)->getOwner()->shouldBe($owner);
    }

    function it_could_have_a_muteable_attribute_collection(ArrayCollection $attributeCollection)
    {
        $this->setAttributes($attributeCollection)->getAttributes()->shouldReturn($attributeCollection);
    }
}
