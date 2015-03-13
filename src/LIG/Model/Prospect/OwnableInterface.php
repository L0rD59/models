<?php

namespace LIG\Model\Prospect;

interface OwnableInterface
{
    /**
     * Gets the owner of prospect.
     *
     * @return OwnerInterface
     */
    public function getOwner();

    /**
     * Sets the owner of prospect.
     *
     * @return OwnerInterface
     */
    public function setOwner();
}