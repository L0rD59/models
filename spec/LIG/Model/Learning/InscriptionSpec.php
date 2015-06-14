<?php

namespace spec\LIG\Model\Learning;

use LIG\Model\Learning\AbstractCampus;
use LIG\Model\Learning\Student;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InscriptionSpec extends ObjectBehavior
{
    function let(Student $student, \DateTime $dateInscription)
    {
        $this->beConstructedWith($student, $dateInscription);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Learning\Inscription');
    }

    function it_should_have_a_date_inscription()
    {
        $this->getDateInscription()->shouldNotBe(null);
        $this->getDateInscription()->shouldBeAnInstanceOf('\DateTime');
    }

    function it_should_have_a_student()
    {
        $this->getStudent()->shouldNotBeNull();
        $this->getStudent()->shouldBeAnInstanceOf('LIG\Model\Learning\Student');
    }
//
//    function it_should_have_a_type()
//    {
//
//    }
}
