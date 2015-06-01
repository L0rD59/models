<?php

namespace spec\LIG\Model\Contact;

use LIG\Model\Contact\ContactOwnerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TelephoneNumberContactSpec extends ObjectBehavior
{
    function let(ContactOwnerInterface $owner, $telephoneNumber)
    {
        $this->beAnInstanceOf('LIG\Model\Contact\Stubs\TelephoneNumberContact');

        $this->beConstructedWith('phone', $owner, $telephoneNumber);
    }

    function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf('LIG\Model\Contact\AbstractContact');
        $this->shouldImplement('LIG\Model\Contact\TelephoneNumberContactInterface');
        $this->shouldImplement('LIG\Model\Contact\ContactInterface');

        $this->getValue()->shouldNotBeNull();
    }

    function it_should_have_a_muteable_telephone_number($telephoneNumber)
    {
        $this->setValue($telephoneNumber);

        $this->getValue()->shouldReturn($telephoneNumber);
    }


}
