<?php

namespace spec\LIG\Model\Learning;

use Doctrine\Common\Collections\ArrayCollection;
use LIG\Model\Learning\Inscription;
use LIG\Model\Learning\InscriptionCollection;
use LIG\Model\Learning\InscriptionInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StudentSpec extends ObjectBehavior
{
    function let(InscriptionCollection $inscriptions, InscriptionInterface $inscription)
    {
        $inscriptions->beConstructedWith(array(array($inscription->getWrappedObject())));
//        $inscriptions->count()->willReturn(1);
        $this->beConstructedWith($inscriptions->getWrappedObject());
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Learning\Student');
    }

    function it_should_have_muteable_inscriptions(InscriptionCollection $inscriptions)
    {
        $this->getInscriptions()->shouldNotBeNull();
        $this->setInscriptions($inscriptions)->getInscriptions()->shouldReturn($inscriptions);
    }
//    function it_should_have_least_one_inscription()
//    {
//        $this->getInscriptions()->shouldHaveType('LIG\Model\Learning\InscriptionCollection');
//        $this->hasInscriptions()->shouldReturn(true);
//    }

}
