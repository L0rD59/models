<?php

namespace LIG\Model\User;

use LIG\Model\Prospect\ProductCollection;

trait UserSalesManTrait
{
    /**
     * @var ProductCollection | ProductInterface[]
     *
     */
    protected $products;

    /**
     * @var SalesManager $salesManager
     *
     * @ManyToOne(targetEntity="UserSalesManager", inversedBy="salesMans")
     */
    protected $salesManager;

    public function __construct(ProductCollection $products, UserSalesManagerInterface $userSalesManager)
    {
        $this->products = $products;
        $this->salesManager = $userSalesManager;
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

    public function getSalesManager()
    {
        return $this->salesManager;
    }

    public function setSalesManager(UserSalesManagerInterface $userSalesManager)
    {
        $this->salesManager = $userSalesManager;

        return $this;
    }
}