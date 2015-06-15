<?php

namespace spec\LIG\Model\Formation;

use LIG\Model\Formation\ContactInterface;
use LIG\Model\Formation\Internship;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormationCertifianteSpec extends ObjectBehavior
{
    public function let(\LIG\Model\Formation\Degree $degree)
    {
        $this->beAnInstanceOf('LIG\Model\Formation\Stubs\FormationCertifiante');

        $this->beConstructedWith('name', 'shortname', 1500, $degree);
    }

    public function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf('LIG\Model\Formation\Formation');
    }
}
