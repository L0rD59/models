<?php

namespace LIG\Model\Learning;

use Doctrine\ORM\Mapping as ORM;

abstract class AbstractCampus
{
    /**
     * @var string $name Nom du campus
     *
     * @ORM\Column()
     */
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