<?php

namespace spec\LIG\Model\Learning;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CoursSpec extends ObjectBehavior
{
    public function let($name, $reference)
    {
        $this->beConstructedWith($name, $reference);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Learning\Cours');
    }

    function it_should_muteable_have_a_name($name)
    {
        $this->getName()->shouldNotBeNull();
        $this->setName($name)->getName()->shouldReturn($name);
    }

    function it_should_have_a_muteable_reference($reference)
    {
        $this->getReference()->shouldNotBeNull();
        $this->setReference($reference)->getReference()->shouldReturn($reference);
    }
}
