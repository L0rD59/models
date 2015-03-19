<?php

namespace LIG\Model\Prospect;

use Doctrine\Common\Collections\ArrayCollection;
use Sylius\Component\Product\Model\ProductInterface;

class ProductCollection extends ArrayCollection
{

    public function __construct(array $products)
    {
        if(empty($products)){
            throw new \Exception('ProductCollection cannot be empty');
        }

        array_walk($products, function ($product, $i) {
            if (!$product instanceof ProductInterface) {
                throw new \Exception('Invalid item (#'.$i.') in ProductCollection expected instance of ProductInterface');
            }
        });

        parent::__construct($products);
    }

    public function add($product)
    {
        if(!($product instanceof ProductInterface)){
            throw new \Exception('You can add only instance of ProductInterface un ProductCollection');
        }

        return parent::add($product);
    }
}
