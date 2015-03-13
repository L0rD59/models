<?php

namespace spec\LIG\Model\User;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserEducationalSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\User\UserEducational');
        $this->shouldBeAnInstanceOf('LIG\Model\User\User');
        $this->shouldImplement('LIG\Model\User\UserInterface');
    }
}
