<?php

namespace spec\LIG\Model\User;

use LIG\Model\User\UserSalesManInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SalesManCollectionSpec extends ObjectBehavior
{
    function let(UserSalesManInterface $userSalesMan)
    {
        $this->beConstructedWith(array($userSalesMan));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\User\SalesManCollection');
    }

    function it_can_not_be_empty()
    {
        $this->shouldThrow('\Exception')->during('__construct', array(array()));
    }

    function it_should_contain_only_sales_man_instance()
    {
        $this->shouldThrow('\Exception')->during('__construct', array(array(new \stdClass())));
    }

    function it_can_add_only_sales_man_instance(UserSalesManInterface $salesMan)
    {
        $this->shouldThrow('\Exception')->during('add', array(new \stdClass()));

        $this->add($salesMan)->shouldReturn(true);
    }
}
