<?php

namespace LIG\Model\User;

use Doctrine\Common\Collections\ArrayCollection;

class SalesManagerCollection extends ArrayCollection
{

    public function __construct(array $salesManagers)
    {
        if(!count($salesManagers)){
            throw new \Exception('SalesManagerCollection cannot be empty');
        }

        array_walk($salesManagers, function ($salesManager, $i) {
            if (!$salesManager instanceof UserSalesManager) {
                throw new \Exception('Invalid item (#'.$i.') in SalesManagerCollection expected instance of UserSalesManager');
            }
        });

        return parent::__construct($salesManagers);
    }

    public function add($userSalesManager)
    {
        if(!($userSalesManager instanceof UserSalesManager)){
            throw new \Exception('Invalid userSalesManager ');
        }
        return parent::add($userSalesManager);
    }
}
