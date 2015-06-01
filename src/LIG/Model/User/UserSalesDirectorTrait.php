<?php

namespace LIG\Model\User;

trait UserSalesDirectorTrait
{
    /**
     * @var SalesManagersCollection | UserSalesManager[] $salesManagers
     *
     * @OneToMany(targetEntity="UserSalesManager", mappedBy="salesDirector")
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