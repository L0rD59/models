<?php

namespace LIG\Model\Common;

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
     * @param OwnerInterface
     *
     * @return self
     */
    public function setOwner(OwnerInterface $owner);
}