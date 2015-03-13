<?php

namespace spec\LIG\Model\User;

use LIG\Model\User\SalesManagerCollection;
use LIG\Model\User\UserSalesManager;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSalesDirectorSpec extends ObjectBehavior
{
    function let(SalesManagerCollection $salesManagersCollection, UserSalesManager $userSalesManager)
    {
        $salesManagersCollection->beConstructedWith(array(array($userSalesManager->getWrappedObject())));

        $this->beConstructedWith($salesManagersCollection->getWrappedObject());
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\User\UserSalesDirector');
        $this->shouldBeAnInstanceOf('LIG\Model\User\User');
        $this->shouldImplement('LIG\Model\User\UserInterface');
    }

    function it_should_have_muteable_sales_managers(SalesManagerCollection $salesManagersCollection)
    {
        $this->setSalesManagers($salesManagersCollection)->getSalesManagers()->shouldreturn($salesManagersCollection);
    }

}
