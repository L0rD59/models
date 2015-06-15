<?php

namespace LIG\Model\Formation;

/**
 * @MappedSuperclass
 */
class Degree
{
    /** @var String $name */
    protected $name;

    /** @var String $shortname */
    protected $shortname;

    public function __construct($name, $shortname)
    {
        $this->name = $name;
        $this->shortname = $shortname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getShortname()
    {
        return $this->shortname;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }
}
