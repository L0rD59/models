<?php

namespace spec\LIG\Model\Formation;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InternshipSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Formation\Internship');
    }
}
