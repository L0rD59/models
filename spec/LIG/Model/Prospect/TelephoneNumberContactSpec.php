<?php

namespace spec\LIG\Model\Prospect;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TelephoneNumberContactSpec extends ObjectBehavior
{
    function let($telephoneNumber)
    {
        $this->beConstructedWith($telephoneNumber);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Prospect\TelephoneNumberContact');
        $this->shouldBeAnInstanceOf('LIG\Model\Prospect\AbstractContact');
        $this->shouldImplement('LIG\Model\Prospect\ContactInterface');
        $this->getTelephoneNumber()->shouldNotBeNull();
    }

    function it_should_have_a_muteable_telephone_number($telephoneNumber)
    {
        $this->setTelephoneNumber($telephoneNumber);

        $this->getTelephoneNumber()->shouldReturn($telephoneNumber);
    }


}
