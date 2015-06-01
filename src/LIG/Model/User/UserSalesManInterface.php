<?php

namespace LIG\Model\User;

use LIG\Model\Prospect\ProductCollection;

interface UserSalesManInterface
{
    public function __construct(ProductCollection $products, UserSalesManagerInterface $userSalesManager);

    public function getProducts();

    public function setProducts(ProductCollection $productCollection);

    public function getSalesManager();

    public function setSalesManager(UserSalesManagerInterface $userSalesManager);
}