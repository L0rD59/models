<?php

namespace spec\LIG\Model\User;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\User\User');
        $this->shouldImplement('Symfony\Component\Security\Core\User\AdvancedUserInterface');
    }

}
