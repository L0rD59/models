<?php

namespace spec\LIG\Model\Learning;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CoursCampusSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Learning\CoursCampus');
    }

    function it_should_be_an_abstractCampus()
    {
        $this->beAnInstanceOf('LIG\Model\Learning\AbstractCampus');
    }
}
