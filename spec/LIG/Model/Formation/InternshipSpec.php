<?php

namespace spec\LIG\Model\Formation;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InternshipSpec extends ObjectBehavior
{
    function let(\DateTime $dateStart, $name)
    {
        $this->beConstructedWith($dateStart, $name);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Formation\Internship');
    }

    function it_should_have_a_muteable_date_start(\DateTime $dateStart)
    {
        $this->getDateStart()->shouldBeAnInstanceOf('\DateTime');
        $this->setDateStart($dateStart)->getDateStart()->shouldBe($dateStart);
    }

    function it_should_have_a_muteable_name($name)
    {
        $this->getName()->shouldNotBe(null);
        $this->setName($name)->getName()->shouldBe($name);
    }
}
