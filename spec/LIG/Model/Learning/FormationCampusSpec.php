<?php

namespace spec\LIG\Model\Learning;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormationCampusSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Learning\FormationCampus');
    }

    function it_should_be_an_abstractCampus()
    {
        $this->shouldBeAnInstanceOf('LIG\Model\Learning\AbstractCampus');
    }

    function it_had_mutable_name($name)
    {
        $this->setName($name);

        $this->getName()->shouldReturn($name);
    }

}
