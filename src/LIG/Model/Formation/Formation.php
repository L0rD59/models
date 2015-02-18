<?php

namespace LIG\Model\Formation;

class Formation
{
    /** @var string $name */
    protected $name;

    /** @var string $shortname */
    protected $shortname;

    /** @var Degree $degree */
    protected $degree;

    /** @var Business $business */
    protected $business;

    public function __construct($name, $shortname, Degree $degree, Business $business)
    {
        $this->name = $name;
        $this->shortname = $shortname;
        $this->degree = $degree;
        $this->business = $business;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getShortname()
    {
        return $this->shortname;
    }

    public function setShortname($shortname)
    {
        $this->shortname = $shortname;
    }

    public function getBusiness()
    {
        return $this->business;
    }

    public function setBusiness(Business $business)
    {
        $this->business = $business;
    }

    public function getDegree()
    {
        return $this->degree;
    }

    public function setDegree(Degree $degree)
    {
        $this->degree = $degree;
    }
}
