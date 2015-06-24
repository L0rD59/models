<?php

namespace LIG\Model\Formation;

class Internship
{
    /** @var String $name */
    protected $name;

    /** @var \DateTime $dateStart */
    protected $dateStart;

    public function __construct(\DateTime $dateStart, $name)
    {
        $this->dateStart = $dateStart;
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getDateStart()
    {
        return $this->dateStart;
    }

    public function setDateStart(\DateTime $dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }
}
