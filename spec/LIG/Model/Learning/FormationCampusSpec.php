<?php

namespace spec\LIG\Model\Learning;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormationCampusSpec extends ObjectBehavior
{
    public function let($name)
    {
        $this->beAnInstanceOf('LIG\Model\Learning\Stubs\FormationCampus');

        $this->beConstructedWith($name);
    }

    function it_is_initializable()
    {
        $this->beAnInstanceOf('LIG\Model\Learning\AbstractCampus');
    }

    function it_had_mutable_name($name)
    {
        $this->setName($name);

        $this->getName()->shouldReturn($name);
    }
}
