<?php

namespace spec\LIG\Model\Address;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AddressSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Address\Address');
        $this->shouldBeAnInstanceOf('Sylius\Component\Addressing\Model\Address');
    }
}
