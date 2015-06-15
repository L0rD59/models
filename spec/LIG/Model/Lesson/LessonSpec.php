<?php

namespace spec\LIG\Model\Lesson;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LessonSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Lesson\Lesson');
    }

//    function it_should_have_a_muteable_name($name)
//    {
//        $this->getName()->shouldNotBe(null);
//        $this->setName($name)->getName()->shouldReturn($name);
//
//    }
//
//    function it_should_have_a_muteable_code($code)
//    {
//        $this->getCode()->shouldNotBe(null);
//
//        $this->setCode($code)->getCode()->shouldReturn($code);
//    }
//
//    function it_should_have_steps()
//    {
//        $this->getSteps()->shouldBeAnInstanceOf('\RecursiveTreeIterator');
//    }

}
