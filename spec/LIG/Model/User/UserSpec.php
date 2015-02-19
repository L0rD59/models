<?php

namespace spec\LIG\Model\User;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\User\User');
    }

    function it_should_be_implement_AdvancedUserInterface()
    {
        $this->shouldImplement('Symfony\Component\Security\Core\User\AdvancedUserInterface');
    }
}
