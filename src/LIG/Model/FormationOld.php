<?php

namespace LIG\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
class FormationOld implements FormationInterface
{
    /**
     * @var string $name
     *
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }



    public function __construct($argument1)
    {
        // TODO: write logic here
    }

    public function getShortname()
    {
        // TODO: write logic here
    }
}
