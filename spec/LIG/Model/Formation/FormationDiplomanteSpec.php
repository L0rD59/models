<?php

namespace spec\LIG\Model\Formation;

use LIG\Model\Formation\ContactInterface;
use LIG\Model\Formation\Internship;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormationDiplomanteSpec extends ObjectBehavior
{
    public function let(\LIG\Model\Formation\Degree $degree,\LIG\Model\Formation\Business $business = null, Internship $internship)
    {
        $this->beAnInstanceOf('LIG\Model\Formation\Stubs\FormationDiplomante');

        $this->beConstructedWith('name', 'shortname', 1500, $degree, $business, $internship);
    }
    public function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf('LIG\Model\Formation\Formation');
    }

    public function it_should_have_an_muteable_internship(Internship $intership)
    {
        $this->getInternship()->shouldNotBeNull();
        $this->setInternship($intership)->getInternship()->shouldReturn($intership);
    }
}
