<?php

namespace spec\LIG\Model\Prospect;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FacebookContactSpec extends ObjectBehavior
{
    function let($fb_id)
    {
        $this->beConstructedWith($fb_id);
    }

    function it_is_initializable($fb_id)
    {
        $this->shouldHaveType('LIG\Model\Prospect\FacebookContact');
        $this->shouldBeAnInstanceOf('LIG\Model\Prospect\AbstractContact');
        $this->shouldImplement('LIG\Model\Prospect\ContactInterface');

        $this->getFbId()->shouldNotBeNull();
    }

    function it_should_have_a_mutable_fb_id($fb_id)
    {
        $this->getFbId()->shouldReturn($fb_id);
        $this->setFbId($fb_id)->getFbId()->shouldReturn($fb_id);
    }
}
