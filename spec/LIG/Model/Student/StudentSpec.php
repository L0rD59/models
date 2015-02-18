<?php

namespace spec\LIG\Model\Student;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StudentSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Student\Student');
    }

    function it_initializes_inscriptions_collection_by_default()
    {
        $this->getInscriptions()->shouldHaveType('Doctrine\Common\Collections\Collection');
    }

    function it_has_no_inscriptions_by_default()
    {
        $this->getInscriptions()->shouldHaveCount(0);
        $this->shouldNotHaveInscription();
    }
}
