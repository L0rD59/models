<?php

namespace LIG\Model\Prospect;

interface ContactInterface extends \Serializable
{
    /**
     * Get type of contact
     *
     * @return string
     */
    public static function getType();

}