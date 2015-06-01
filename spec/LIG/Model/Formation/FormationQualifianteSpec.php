<?php

namespace spec\LIG\Model\Formation;

use LIG\Model\Formation\ContactInterface;
use LIG\Model\Formation\Internship;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormationQualifianteSpec extends ObjectBehavior
{
    public function let(\LIG\Model\Formation\Degree $degree,\LIG\Model\Formation\Business $business = null)
    {
        $this->beAnInstanceOf('LIG\Model\Formation\Stubs\FormationQualifiante');

        $this->beConstructedWith('name', 'shortname', 1500, $degree, $business);
    }

    public function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf('LIG\Model\Formation\Formation');
    }
}
