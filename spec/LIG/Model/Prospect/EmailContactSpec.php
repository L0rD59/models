<?php

namespace spec\LIG\Model\Prospect;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmailContactSpec extends ObjectBehavior
{
    function let($email)
    {
        $this->beConstructedWith($email);
    }

    function it_is_initializable($email)
    {
        $this->shouldHaveType('LIG\Model\Prospect\EmailContact');
        $this->shouldBeAnInstanceOf('LIG\Model\Prospect\AbstractContact');
        $this->shouldImplement('LIG\Model\Prospect\ContactInterface');

        $this->getEmail()->shouldNotBeNull();
    }

    function it_should_have_a_mutable_email($email)
    {
        $this->getEmail()->shouldReturn($email);
        $this->setEmail($email)->getEmail()->shouldReturn($email);
    }
}
