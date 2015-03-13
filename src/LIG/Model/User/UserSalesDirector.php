<?php

namespace LIG\Model\User;

class UserSalesDirector extends User
{
    /**
     * @var SalesManagersCollection | UserSalesManager[] $salesManagers
     */
    protected $salesManagers;

    public function __construct(SalesManagerCollection $salesManagerCollection)
    {
        $this->salesManagers = $salesManagerCollection;
    }

    public function setSalesManagers(SalesManagerCollection $salesManagerCollection)
    {
        $this->salesManagers = $salesManagerCollection;

        return $this;
    }

    public function getSalesManagers()
    {
        return $this->salesManagers;
    }
}
