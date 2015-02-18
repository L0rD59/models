<?php

namespace spec\LIG\Model\Formation;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BusinessSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('name');
        $this->shouldHaveType('LIG\Model\Formation\Business');
    }
}
