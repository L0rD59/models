<?php

namespace LIG\Model\Formation;

class Formation
{

    protected $name;

    protected $shortname;

    public function __construct($name, $argument2, $argument3, $argument4)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getShortname()
    {
        // TODO: write logic here
    }

    public function setBusiness($argument1)
    {
        // TODO: write logic here
    }

    public function getDegree()
    {
        // TODO: write logic here
    }

    public function getBusiness()
    {
        // TODO: write logic here
    }

    public function setName($argument1)
    {
        $this->name = $argument1;
    }
}
