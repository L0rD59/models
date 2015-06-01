<?php

namespace LIG\Model\User;

interface UserSalesManagerInterface
{
    public function getSalesDirector();

    public function __construct(UserSalesDirectorInterface $userSalesDirector, SalesManCollection $salesManCollection);

    public function setSalesManagers(SalesManCollection $salesManCollection);

    public function getSalesMans();

    public function setSalesDirector(UserSalesDirectorInterface $userSalesDirector);
}