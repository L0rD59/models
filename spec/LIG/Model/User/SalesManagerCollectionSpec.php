<?php

namespace spec\LIG\Model\User;

use LIG\Model\User\UserSalesManager;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SalesManagerCollectionSpec extends ObjectBehavior
{
    function let(UserSalesManager $userSalesManager)
    {
        $this->beConstructedWith(array($userSalesManager));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\User\SalesManagerCollection');
    }

    function it_can_not_be_empty()
    {
        $this->shouldThrow('\Exception')->during('__construct', array(array()));
    }

    function it_should_contain_only_sales_manager_instance()
    {
        $this->shouldThrow('\Exception')->during('__construct', array(array(new \stdClass())));
    }

    function it_can_add_only_sales_manager_instance(UserSalesManager $salesManager)
    {
        $this->shouldThrow('\Exception')->during('add', array(new \stdClass()));

        $this->add($salesManager)->shouldReturn(true);
    }
}
