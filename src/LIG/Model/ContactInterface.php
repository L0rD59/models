<?php

namespace LIG\Model;

interface ContactInterface extends \Serializable
{
    /**
     * Get name of contact
     *
     * @return string
     */
    public function getName();

    /**
     * Set name of contact
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name);
}