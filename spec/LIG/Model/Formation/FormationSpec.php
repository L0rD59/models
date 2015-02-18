<?php

namespace spec\LIG\Model\Formation;

use LIG\Model\Business;
use LIG\Model\ContactInterface;
use LIG\Model\Degree;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormationSpec extends ObjectBehavior
{
//    public function it_is_initializable(\LIG\Model\Formation\Degree $degree,\LIG\Model\Formation\Business $business = null)
//    {
//        $this->beConstructedWith('name', 'shortname', $degree, $business);
//        $this->shouldHaveType('LIG\Model\Formation');
//    }

    public function let(\LIG\Model\Formation\Degree $degree,\LIG\Model\Formation\Business $business = null)
    {
        $this->beConstructedWith('name', 'shortname', $degree, $business);
        $this->shouldHaveType('LIG\Model\Formation\Formation');
    }

    public function it_should_have_a_name()
    {
        $this->getName()->shouldNotReturn(null);

        $this->setName('name');

        $this->getName()->shouldReturn('name');
    }

    public function it_should_have_a_shortname()
    {
        $this->getShortname()->shouldNotReturn(null);

        $this->setShortname('shortname');

        $this->getShortname()->shouldReturn('shortname');
    }

    public function it_could_have_a_business(\LIG\Model\Formation\Business $business = null)
    {
//        $this->getBusiness()->shouldReturn(null);

        $this->setBusiness($business);

        $this->getBusiness()->shouldReturn($business);
        $this->getBusiness()->shouldBeAnInstanceOf('LIG\Model\Formation\Business');
    }

    public function it_should_have_a_degree(\LIG\Model\Formation\Degree $degree)
    {
        $this->getDegree()->shouldNotReturn(null);

        $this->setDegree($degree);

        $this->getDegree()->shouldReturn($degree);
        $this->getDegree()->shouldBeAnInstanceOf('LIG\Model\Formation\Degree');
    }
}
