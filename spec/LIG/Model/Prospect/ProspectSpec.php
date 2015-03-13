<?php

namespace spec\LIG\Model\Prospect;

use LIG\Model\Prospect\ContactCollection;
use LIG\Model\Prospect\EmailContact;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProspectSpec extends ObjectBehavior
{
    public function let(ContactCollection $contactCollection, EmailContact $emailContact, $provider)
    {
        $emailContact->beADoubleOf('LIG\Model\Prospect\EmailContact');

        $contactCollection->beConstructedWith(array(array($emailContact->getWrappedObject())));
        $contactCollection->count()->willReturn(1);
        $contactCollection->isEmpty()->willReturn(false);

        $this->beConstructedWith($contactCollection->getWrappedObject(), $provider);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Prospect\Prospect');

        $this->hasContacts()->shouldReturn(true);
        $this->shouldHaveContacts();
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
        $this->getProvider()->shouldNotBeNull();
        $this->setProvider($provider)->getProvider()->shouldBe($provider);
//        $this->getProvider()->shouldImplement('LIG\Model\Prospect\ProspectProviderInterface');
//        $this->getProvider()->shouldBeAnIntanceOf('LIG\Model\Prospect\AbstractProspectProvider');
    }
}
