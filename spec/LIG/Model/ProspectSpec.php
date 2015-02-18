<?php

namespace spec\LIG\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProspectSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Prospect');
    }
}
