<?php

namespace spec\LIG\Model\Learning;

use LIG\Model\Learning\AbstractCampus;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InscriptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Learning\Inscription');
    }

    function it_had_no_dateInscription_by_default()
    {
        $this->getDateInscription()->shouldreturn(null);
    }

    function it_had_mutable_dateInscription(\DateTime $dateInscription)
    {
        $this->setDateInscription($dateInscription);

        $this->getDateInscription()->shouldReturn($dateInscription);
    }

    function it_had_no_campus_by_default()
    {
        $this->getCampus()->shouldReturn(null);
    }

    function it_had_mutable_campus(AbstractCampus $campus)
    {
        $this->setCampus($campus);

        $this->getCampus()->shouldReturn($campus);
    }
}
