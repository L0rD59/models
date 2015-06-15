<?php

namespace spec\LIG\Model\Contact;

use LIG\Model\Contact\ContactOwnerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Sylius\Component\Addressing\Model\Address;

class AddressContactSpec extends ObjectBehavior
{
    function let(ContactOwnerInterface $owner, Address $address)
    {
        $this->beAnInstanceOf('LIG\Model\Contact\Stubs\AddressContact');

        $this->beConstructedWith('address', $owner, $address);
    }

    function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf('LIG\Model\Contact\AbstractContact');
        $this->shouldImplement('LIG\Model\Contact\AddressContactInterface');
        $this->shouldImplement('LIG\Model\Contact\ContactInterface');
    }

    function it_should_have_an_address()
    {
        $this->getValue()->shouldNotBe(null);
        $this->getValue()->shouldImplement('Sylius\Component\Addressing\Model\AddressInterface');
    }
}
