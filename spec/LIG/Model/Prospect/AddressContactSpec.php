<?php

namespace spec\LIG\Model\Prospect;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Sylius\Component\Addressing\Model\Address;

class AddressContactSpec extends ObjectBehavior
{
    function let(Address $address)
    {
        $this->beConstructedWith($address);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Prospect\AddressContact');
        $this->shouldBeAnInstanceOf('LIG\Model\Prospect\AbstractContact');
        $this->shouldImplement('LIG\Model\Prospect\ContactInterface');
    }

    function it_should_have_an_address()
    {
        $this->getAddress()->shouldNotBeNull();
        $this->getAddress()->shouldImplement('Sylius\Component\Addressing\Model\AddressInterface');
    }
}
