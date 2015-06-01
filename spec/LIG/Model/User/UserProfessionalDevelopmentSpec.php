<?php

namespace spec\LIG\Model\User;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserProfessionalDevelopmentSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('LIG\Model\User\Stubs\UserProfessionalDevelopment');
    }

    function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf('LIG\Model\User\User');
        $this->shouldImplement('LIG\Model\User\UserInterface');
    }
}
