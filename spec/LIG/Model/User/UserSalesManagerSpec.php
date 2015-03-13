<?php

namespace spec\LIG\Model\User;

use LIG\Model\User\SalesManCollection;
use LIG\Model\User\UserSalesDirector;
use LIG\Model\User\UserSalesMan;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSalesManagerSpec extends ObjectBehavior
{
    function let(
        UserSalesDirector $userSalesDirector,
        SalesManCollection $salesMansCollection,
        UserSalesMan $userSalesMan
    ) {
        $salesMansCollection->beConstructedWith(array(
            array($userSalesMan->getWrappedObject())
        ));

        $this->beConstructedWith(
            $userSalesDirector->getWrappedObject(), $salesMansCollection->getWrappedObject());
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\User\UserSalesManager');
        $this->shouldBeAnInstanceOf('LIG\Model\User\User');
        $this->shouldImplement('LIG\Model\User\UserInterface');
    }

    function it_should_have_a_muteable_sales_director(UserSalesDirector $userSalesDirector)
    {
        $this->getSalesDirector()->shouldReturn($userSalesDirector);
        $this->setSalesDirector($userSalesDirector)->getSalesDirector()->shouldReturn($userSalesDirector);
    }

    function it_should_have_muteable_sales_mans(SalesManCollection $salesMansCollection)
    {
        $this->setSalesManagers($salesMansCollection)->getSalesMans()->shouldreturn($salesMansCollection);
    }
}
