<?php

namespace LIG\Model\User;

use LIG\Model\Prospect\ProductCollection;

class UserSalesMan extends User
{
    /**
     * @var ProductCollection | ProductInterface[]
     *
     */
    protected $products;

    public function __construct(ProductCollection $products)
    {
        $this->products = $products;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function setProducts(ProductCollection $productCollection)
    {
        $this->products = $productCollection;

        return $this;
    }
}
