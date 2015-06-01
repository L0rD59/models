<?php

namespace LIG\Model\User;

interface UserSalesDirectorInterface
{
    public function __construct(SalesManagerCollection $salesManagerCollection);

    public function setSalesManagers(SalesManagerCollection $salesManagerCollection);

    public function getSalesManagers();
}