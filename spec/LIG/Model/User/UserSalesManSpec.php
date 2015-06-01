<?php

namespace spec\LIG\Model\User;

use LIG\Model\Prospect\ProductCollection;
use LIG\Model\User\UserSalesManager;
use LIG\Model\User\UserSalesManagerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSalesManSpec extends ObjectBehavior
{
    function let(ProductCollection $products, UserSalesManagerInterface $userSalesManager)
    {
        $this->beAnInstanceOf('LIG\Model\User\Stubs\UserSalesMan');

        $this->beConstructedWith($products, $userSalesManager);
    }

    function it_is_initializable()
    {
        $this->shouldBeAnInstanceOf('LIG\Model\User\User');
        $this->shouldImplement('LIG\Model\User\UserInterface');
    }

    function it_should_have_a_muteable_collection_of_products(ProductCollection $productCollection)
    {
        $this->getProducts()->shouldBeAnInstanceOf('LIG\Model\Prospect\ProductCollection');
        $this->setProducts($productCollection)->getProducts()->shouldReturn($productCollection);
    }

    function it_should_have_a_muteable_sales_manager(UserSalesManagerInterface $userSalesManager)
    {
        $this->getSalesManager()->shouldReturn($userSalesManager);
        $this->setSalesManager($userSalesManager)->getSalesManager()->shouldReturn($userSalesManager);
    }
}
