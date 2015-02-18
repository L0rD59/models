<?php

namespace LIG\Model;

interface FormationInterface
{
    /**
     * Sets the name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name);

    /**
     * Get name.
     *
     * @return string
     */
    public function getName();

}