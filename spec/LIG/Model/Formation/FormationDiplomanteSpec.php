<?php

namespace spec\LIG\Model\Formation;

use LIG\Model\Formation\ContactInterface;
use LIG\Model\Formation\Internship;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormationDiplomanteSpec extends ObjectBehavior
{
    public function let($name, $duration, $shortname, \LIG\Model\Formation\Degree $degree, Internship $internship)
    {
        $this->beAnInstanceOf('LIG\Model\Formation\Stubs\FormationDiplomante');

        $this->beConstructedWith($name, $duration, $shortname, $degree, $internship);
    }
    public function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf('LIG\Model\Formation\Formation');
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
}
