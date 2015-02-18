<?php

namespace spec\LIG\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DegreeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('name', 'shortname');
        $this->shouldHaveType('LIG\Model\Degree');
    }

//    function it_should_have_a_name()
//    {
//        $this->beConstructedWith('name');
//    }
//
//    function it_should_have_a_shortname()
//    {
//        $this->beConstructedWith('shortname');
//    }
}
