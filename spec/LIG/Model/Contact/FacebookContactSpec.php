<?php

namespace spec\LIG\Model\Contact;

use LIG\Model\Contact\ContactOwnerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FacebookContactSpec extends ObjectBehavior
{
    function let(ContactOwnerInterface $owner, $fb_id)
    {
        $this->beAnInstanceOf('LIG\Model\Contact\Stubs\FacebookContact');

        $this->beConstructedWith('facebook', $owner, $fb_id);
    }

    function it_is_initializable($fb_id)
    {
        $this->shouldBeAnInstanceOf('LIG\Model\Contact\AbstractContact');
        $this->shouldImplement('LIG\Model\Contact\FacebookContactInterface');
        $this->shouldImplement('LIG\Model\Contact\ContactInterface');

        $this->getValue()->shouldNotBeNull();
    }

    function it_should_have_a_mutable_fb_id($fb_id)
    {
        $this->getValue()->shouldReturn($fb_id);
        $this->setValue($fb_id)->getValue()->shouldReturn($fb_id);
    }
}
