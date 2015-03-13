<?php

namespace spec\LIG\Model\Prospect;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AddressContactSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Prospect\AddressContact');
        $this->shouldBeAnInstanceOf('LIG\Model\Prospect\AbstractContact');
        $this->shouldImplement('LIG\Model\Prospect\ContactInterface');
    }
}
