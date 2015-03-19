<?php

namespace spec\LIG\Model\Prospect;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Sylius\Component\Product\Model\ProductInterface;

class ProductCollectionSpec extends ObjectBehavior
{
    function let(ProductInterface $product)
    {
        $product->beConstructedWith(array('Product name'));
        $this->beConstructedWith(array($product->getWrappedObject()));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('LIG\Model\Prospect\ProductCollection');
    }

    function it_can_not_be_empty()
    {
        $this->shouldThrow('\Exception')->during('__construct', array(array()));
    }

    function it_should_contain_only_product_instance()
    {
        $this->shouldThrow('\Exception')->during('__construct', array(array(new \stdClass())));
    }

    function it_can_add_only_product_instance(ProductInterface $product)
    {
        $this->shouldThrow('\Exception')->during('add', array(new \stdClass()));

        $this->add($product)->shouldReturn(true);
    }
}
