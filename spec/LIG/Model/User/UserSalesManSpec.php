<?php

namespace spec\LIG\Model\User;

use LIG\Model\Prospect\ProductCollection;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSalesManSpec extends ObjectBehavior
{
    function let(ProductCollection $products)
    {
        $this->beConstructedWith($products);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\User\UserSalesMan');
        $this->shouldBeAnInstanceOf('LIG\Model\User\User');
        $this->shouldImplement('LIG\Model\User\UserInterface');
    }

    function it_should_have_a_muteable_collection_of_products(ProductCollection $productCollection)
    {
        $this->getProducts()->shouldBeAnInstanceOf('LIG\Model\Prospect\ProductCollection');
        $this->setProducts($productCollection)->getProducts()->shouldReturn($productCollection);
    }
}
