<?php

namespace spec\LIG\Model\Learning;

use LIG\Model\Learning\InscriptionInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class InscriptionCollectionSpec extends ObjectBehavior
{
    function let(InscriptionInterface $inscription)
    {
        $this->beConstructedWith(array($inscription));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Learning\InscriptionCollection');
    }

    function it_can_not_be_empty()
    {
        $this->shouldThrow('\Exception')->during('__construct', array(array()));
    }

    function it_should_contain_only_contact_instance()
    {
        $this->shouldThrow('\Exception')->during('__construct', array(array(new \stdClass())));
    }

    function it_can_add_only_contact_instance(InscriptionInterface $inscription)
    {
        $this->shouldThrow('\Exception')->during('add', array(new \stdClass()));

        $this->add($inscription)->shouldReturn(true);
    }
}
