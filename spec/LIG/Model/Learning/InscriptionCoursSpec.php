<?php

namespace spec\LIG\Model\Learning;

use LIG\Model\Formation\FormationInterface;
use LIG\Model\Learning\Student;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InscriptionCoursSpec extends ObjectBehavior
{
    function let($cours, Student $student, \DateTime $dateInscription){
        $this->beConstructedWith($cours, $student, $dateInscription);
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Learning\InscriptionCours');
        $this->shouldBeAnInstanceOf('LIG\Model\Learning\Inscription');
    }

    function it_should_have_a_muteable_cours($cours)
    {
        $this->getCours()->shouldNotBe(null);
        $this->setCours($cours)->getCours()->shouldBe($cours);
    }
}
