<?php

namespace spec\LIG\Model\Contact;

use LIG\Model\Contact\ContactOwnerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmailContactSpec extends ObjectBehavior
{
    function let(ContactOwnerInterface $owner, $email)
    {
        $this->beAnInstanceOf('LIG\Model\Contact\Stubs\EmailContact');

        $this->beConstructedWith('email', $owner, $email);
    }

    function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf('LIG\Model\Contact\AbstractContact');
        $this->shouldImplement('LIG\Model\Contact\EmailContactInterface'); //?
        $this->shouldImplement('LIG\Model\Contact\ContactInterface');
    }

    function it_should_have_an_email_as_a_value($email)
    {
        $this->getValue()->shouldReturn($email);
    }
}
