<?php

namespace spec\LIG\Model\Formation;

use LIG\Model\Formation\ContactInterface;
use LIG\Model\Formation\Internship;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormationSpec extends ObjectBehavior
{
    public function let(\LIG\Model\Formation\Degree $degree, Internship $internship)
    {
        $this->beConstructedWith('name', 'shortname', 1500, $degree, $internship);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Formation\Formation');
//        $this->shouldImplement('LIG\Model\Formation\FormationInteface');
    }

    public function it_should_have_a_name()
    {
        $this->getName()->shouldNotReturn(null);

        $this->setName('name')->getName()->shouldReturn('name');
    }

    public function it_should_have_a_shortname()
    {
        $this->getShortname()->shouldNotReturn(null);

        $this->setShortname('shortname')->getShortname()->shouldReturn('shortname');
    }

    public function it_should_have_a_degree(\LIG\Model\Formation\Degree $degree)
    {
        $this->getDegree()->shouldNotReturn(null);

        $this->setDegree($degree)->getDegree()->shouldReturn($degree);
        $this->getDegree()->shouldBeAnInstanceOf('LIG\Model\Formation\Degree');
    }

    public function it_should_have_an_muteable_internship(Internship $intership)
    {
        $this->getInternship()->shouldNotBe(null);
        $this->setInternship($intership)->getInternship()->shouldReturn($intership);
    }

    public function it_should_have_an_muteable_duration_in_hour($duration)
    {
        $this->getDuration()->shouldNotBe(null);
        $this->setDuration($duration)->getDuration()->shouldReturn($duration);
    }
}
