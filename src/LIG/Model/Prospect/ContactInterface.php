<?php

namespace LIG\Model\Prospect;

interface ContactInterface extends \Serializable
{
    /**
     * Get type of contact
     *
     * @return string
     */
    public function getType();

    /**
     * Set type of contact
     *
     * @param string $type
     *
     * @return self
     */
    public function setType($type);
}