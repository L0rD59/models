<?php

namespace spec\LIG\Model\Learning;

use LIG\Model\Formation\FormationInterface;
use LIG\Model\Learning\Student;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InscriptionFormationSpec extends ObjectBehavior
{
    function let(FormationInterface $formation, Student $student, \DateTime $dateInscription){
        $this->beConstructedWith($formation, $student, $dateInscription);
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Learning\InscriptionFormation');
        $this->shouldBeAnInstanceOf('LIG\Model\Learning\Inscription');
    }

    function it_should_have_a_muteable_formation(FormationInterface $formation)
    {
        $this->getFormation()->shouldNotBe(null);
        $this->setFormation($formation)->getFormation()->shouldBe($formation);
    }
}
