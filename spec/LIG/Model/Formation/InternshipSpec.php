<?php

namespace spec\LIG\Model\Formation;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InternshipSpec extends ObjectBehavior
{
    function let($name)
    {
        $this->beConstructedWith($name);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Formation\Internship');
    }

    function it_should_have_a_muteable_name($name)
    {
        $this->getName()->shouldNotBe(null);
        $this->setName($name)->getName()->shouldBe($name);
    }
}
