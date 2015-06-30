<?php

namespace spec\LIG\Model\Lesson;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LessonSpec extends ObjectBehavior
{
    function let($name, $reference)
    {
        $this->beConstructedWith($name, $reference);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Lesson\Lesson');
    }

    function it_should_have_a_muteable_name($name)
    {
        $this->getName()->shouldNotReturn(null);
        $this->setName($name)->getName()->shouldReturn($name);

    }

    function it_should_have_a_muteable_reference($reference)
    {
        $this->getReference()->shouldNotReturn(null);

        $this->setReference($reference)->getReference()->shouldReturn($reference);
    }

//    function it_should_have_steps()
//    {
//        $this->getSteps()->shouldBeAnInstanceOf('\RecursiveTreeIterator');
//    }

}
