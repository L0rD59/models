<?php

namespace spec\LIG\Model\Formation;

use LIG\Model\Formation\ContactInterface;
use LIG\Model\Formation\Internship;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormationCertifianteSpec extends ObjectBehavior
{
    public function let($name, $duration, $shortname)
    {
        $this->beAnInstanceOf('LIG\Model\Formation\Stubs\FormationCertifiante');

        $this->beConstructedWith($name, $duration, $shortname);
    }

    public function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf('LIG\Model\Formation\Formation');
    }
}
