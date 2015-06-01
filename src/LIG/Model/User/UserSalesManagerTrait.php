<?php

namespace LIG\Model\User;

trait UserSalesManagerTrait
{
    /**
     * @var UserSalesDirector $salesDirector
     *
     * @ManyToOne(targetEntity="UserSalesDirector", inversedBy="salesManagers")
     */
    protected $salesDirector;

    /**
     * @var  SalesManCollection | UserSalesMan[] $salesMans
     *
     * @OneToMany(targetEntity="UserSalesMan", mappedBy="salesManager")
     */
    protected $salesMans;

    public function getSalesDirector()
    {
        return $this->salesDirector;
    }

    public function __construct(UserSalesDirectorInterface $userSalesDirector, SalesManCollection $salesManCollection)
    {
        $this->salesDirector = $userSalesDirector;
        $this->salesMans = $salesManCollection;
    }

    public function setSalesManagers(SalesManCollection $salesManCollection)
    {
        $this->salesMans = $salesManCollection;

        return $this;
    }

    public function getSalesMans()
    {
        return $this->salesMans;
    }

    public function setSalesDirector(UserSalesDirectorInterface $userSalesDirector)
    {
        $this->salesDirector = $userSalesDirector;

        return $this;
    }
}