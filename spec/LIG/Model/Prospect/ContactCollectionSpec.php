<?php

namespace spec\LIG\Model\Prospect;

use LIG\Model\Prospect\AbstractContact;
use LIG\Model\Prospect\EmailContact;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ContactCollectionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(array(new EmailContact('test@domain.ext')));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Prospect\ContactCollection');
    }

    function it_can_not_be_empty()
    {
        $this->shouldThrow('\Exception')->during('__construct', array(array()));
    }

    function it_should_contain_only_contact_instance()
    {
        $this->shouldThrow('\Exception')->during('__construct', array(array(new \stdClass())));
    }

    function it_can_add_only_contact_instance(AbstractContact $contact)
    {
        $this->shouldThrow('\Exception')->during('add', array(new \stdClass()));

        $this->add($contact)->shouldReturn(true);
    }
}
