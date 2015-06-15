<?php

namespace spec\LIG\Model\Contact;

use LIG\Model\Contact\ContactOwnerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ContactSpec extends ObjectBehavior
{
    function let($name, ContactOwnerInterface $owner, $value)
    {
        $this->beAnInstanceOf('LIG\Model\Contact\Stubs\Contact');
        $this->beConstructedWith($name, $owner, $value);
    }

    function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf('LIG\Model\Contact\AbstractContact');
    }

    function it_should_have_a_muteable_name($name)
    {
        $this->getName()->shouldNotBe(null);
        $this->setName($name)->getName()->shouldReturn($name);
    }

    function it_should_have_a_muteable_owner(ContactOwnerInterface $owner)
    {
        $this->getOwner()->shouldBeAnInstanceOf('LIG\Model\Contact\ContactOwnerInterface');

        $this->setOwner($owner)->getOwner()->shouldReturn($owner);
    }

    function it_should_have_a_muteable_value($value)
    {
        $this->getValue()->shouldNotBe(null);

        $this->setValue($value)->getValue()->shouldReturn($value);
    }
}
