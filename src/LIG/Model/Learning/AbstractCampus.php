<?php

namespace LIG\Model\Learning;

abstract class AbstractCampus
{
    /** @var string $name */
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}