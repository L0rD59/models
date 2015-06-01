<?php

namespace spec\LIG\Model\Contact;

use LIG\Model\Common\OwnerInterface;
use LIG\Model\Contact\ContactInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ContactCollectionSpec extends ObjectBehavior
{
    function let(ContactInterface $contact, OwnerInterface $owner)
    {
        $this->beConstructedWith(array($contact), $owner);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Contact\ContactCollection');
    }

    function it_can_not_be_empty()
    {
        $this->shouldThrow('\Exception')->during('__construct', array(array()));
    }

    function it_should_contain_only_contact_instance()
    {
        $this->shouldThrow('\Exception')->during('__construct', array(array(new \stdClass())));
    }

    function it_can_add_only_contact_instance(ContactInterface $contact)
    {
        $this->shouldThrow('\Exception')->during('add', array(new \stdClass()));

        $this->add($contact)->shouldReturn(true);
    }
}
