<?php

namespace spec\LIG\Model\User;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserEducationalSpec extends ObjectBehavior
{
    function let()
    {
        $this->beAnInstanceOf('LIG\Model\User\Stubs\UserEducational');
    }

    function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf('LIG\Model\User\User');
        $this->shouldImplement('LIG\Model\User\UserInterface');
    }
}
