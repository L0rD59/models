<?php

namespace LIG\Model\User;

class UserSalesManager extends User
{
    /** @var  UserSalesDirector $salesDirector */
    protected $salesDirector;

    /** @var  SalesManCollection | UserSalesMan[] $salesMans */
    protected $salesMans;

    public function getSalesDirector()
    {
        return $this->salesDirector;
    }

    public function __construct(UserSalesDirector $userSalesDirector, SalesManCollection $salesManCollection)
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

    public function setSalesDirector(UserSalesDirector $userSalesDirector)
    {
        $this->salesDirector = $userSalesDirector;

        return $this;
    }
}
