<?php

namespace spec\LIG\Model\Formation;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DegreeSpec extends ObjectBehavior
{
    function let($name, $shortname)
    {
        $this->beConstructedWith($name, $shortname);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Formation\Degree');
    }

    function it_should_have_a_muteable_name($name)
    {
        $this->getName()->shouldNotBe(null);
        $this->setName($name)->getName()->shouldBe($name);
    }

    function it_should_have_a_muteable_shortname($shortname)
    {
        $this->getShortname()->shouldNotBe(null);
        $this->setShortname($shortname)->getShortname()->shouldBe($shortname);
    }
}
