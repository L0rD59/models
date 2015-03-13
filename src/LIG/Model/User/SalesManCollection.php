<?php

namespace LIG\Model\User;

use Doctrine\Common\Collections\ArrayCollection;

class SalesManCollection extends ArrayCollection
{

    public function __construct(array $salesMans)
    {
        if(!count($salesMans)){
            throw new \Exception('SalesManCollection cannot be empty');
        }

        array_walk($salesMans, function ($salesMan, $i) {
            if (!$salesMan instanceof UserSalesMan) {
                throw new \Exception('Invalid item (#'.$i.') in SalesManCollection expected instance of UserSalesMan');
            }
        });

        return parent::__construct($salesMans);
    }

    public function add($userSalesMan)
    {
        if(!($userSalesMan instanceof UserSalesMan)){
            throw new \Exception('Invalid userSalesMan ');
        }

        return parent::add($userSalesMan);
    }
}
